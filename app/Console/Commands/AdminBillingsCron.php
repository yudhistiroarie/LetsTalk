<?php

namespace App\Console\Commands;

use App\Models\VehicleMaster;
use Illuminate\Console\Command;
use App\Models\VehicleAdminBilling;

class AdminBillingsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminBillings:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = VehicleMaster::
            leftJoin("VehicleDetails as a", "a.VehiclePlatNo", "=", "VehicleMaster.VehiclePlatNo")
            ->select("a.VehicleDetailsSTNKDueDate as dueDate", "a.VehicleDetailsSTNKNo", "a.VehicleDetailsSTNKFee as price", "VehicleMaster.VehicleId as id")
            ->get();
        
        foreach($data as $items) {
            $latestBill = VehicleAdminBilling::
                where("VehicleId", "=", $items["id"])
                ->orderBy("VehicleAdminBillingSequence", "desc")
                ->first();
            
            $termin = ($latestBill->VehicleAdminBillingSequence ?? 0) + 1;
            if(!empty($latestBill->IsApproved) || !isset($latestBill->IsApproved)) {
                $dueDate = $items["dueDate"];
                
                if($termin == 1) {
                    $dueDate_Ymd = date("Y") . "-" . date("m-d", strtotime($dueDate));
                    
                } else {
                    $dueDate_Ymd = date("Y-m-d", strtotime("+1 year", strtotime($dueDate)));
                }
                
                $_p["VehicleId"] = $items->id;
                $_p["VehicleAdminBillingDate"] = $dueDate_Ymd;
                $_p["VehicleAdminBillingPrice"] = $items->price;
                $_p["VehicleAdminBillingSequence"] = $termin;
                
                $adminBill = new VehicleAdminBilling();
                $adminBill
                    ->fill($_p)
                    ->save();
            }
        }
    }
}

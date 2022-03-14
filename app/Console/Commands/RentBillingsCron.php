<?php

namespace App\Console\Commands;

use App\Models\VehicleTrxRent;
use App\Models\VehicleTrxRentBilling;
use Illuminate\Console\Command;

class RentBillingsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rentBillings:cron';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create rent billing for each termin';
    
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
        $rents = VehicleTrxRent::
            get();
        foreach($rents as $items) {
            $latestBill = VehicleTrxRentBilling::
                where("VehicleTrxRentId", $items->VehicleTrxRentId)
                ->orderBy("VehicleTrxRentBillTermin", "desc")
                ->first();
            
            // latest termin > total termin
            // latest IsApproved = 0
            // latest IsApproved = null
            $termin = ($latestBill->VehicleTrxRentBillTermin ?? 0) + 1;
            if($termin <= $items->VehicleTrxRentTerminCount && (!empty($latestBill->IsApproved) && !isset($latestBill->IsApproved))) {
                // due date for each termin
                $date = strtotime($latestBill->VehicleTrxRentBillDue ?? $items->VehicleTrxRentDate);
                $date = date("Y-m-d", strtotime("+" . $items->VehicleTrxRentTermin . " months", $date));
                
                $_p["VehicleTrxRentId"] = $items->VehicleTrxRentId;
                $_p["VehicleTrxRentBillDue"] = $date;
                $_p["VehicleTrxRentBillTermin"] = $termin;
                
                $rentBill = new VehicleTrxRentBilling();
                $rentBill
                    ->fill($_p)
                    ->save();
            }
        }
    }
}

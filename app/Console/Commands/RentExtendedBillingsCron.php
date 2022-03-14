<?php

namespace App\Console\Commands;

use App\Models\VehicleRentBillingExt;
use App\Models\VehicleTrxRentExtended;
use Illuminate\Console\Command;

class RentExtendedBillingsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rentExtendedBillings:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create extended rent billing for each termin';

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
        $rentExts = VehicleTrxRentExtended::
            get();
        foreach($rentExts as $items) {
            $latestRentExt = VehicleRentBillingExt::
                where("VehicleTrxRentExtId", $items->VehicleTrxRentExtendedId)
                ->orderBy("VehicleRentBillExtTermin", "desc")
                ->first();
            
            $termin = ($latestRentExt->VehicleRentBillExtTermin ?? 0) + 1;
            if($termin <= $items->VehicleTrxRentExtendedTerminCount && (!empty($latestRentExt->IsApproved) || !isset($latestRentExt->IsApproved))) {
                // due date for each termin
                $date = strtotime($latestRentExt->VehicleRentBillExtDue ?? $items->VehicleTrxRentExtendedDateStart);
                $date = date("Y-m-d", strtotime("+" . $items->VehicleTrxRentExtendedTermin . " months", $date));
                
                $_p["VehicleTrxRentExtId"] = $items->VehicleTrxRentExtendedId;
                $_p["VehicleRentBillExtDue"] = $date;
                $_p["VehicleRentBillExtTermin"] = $termin;
                
                $rentExtBill = new VehicleRentBillingExt();
                $rentExtBill
                    ->fill($_p)
                    ->save();
            }
        }
    }
}

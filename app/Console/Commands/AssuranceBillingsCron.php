<?php

namespace App\Console\Commands;

use App\Models\VehicleAssurance;
use App\Models\VehicleAssuranceBilling;
use Illuminate\Console\Command;

class AssuranceBillingsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assuranceBillings:cron';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create active assurance billing for each month';
    
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
        $assurances = VehicleAssurance::
            get();
        foreach($assurances as $items) {
            $latestBill = VehicleAssuranceBilling::
                where("VehicleAssuranceId", $items->VehicleAssuranceId)
                ->orderBy("VehicleAssuranceBillingDate", "desc")
                ->first();
            
            if($latestBill->IsClaimed) {
                continue;
            }
            
            $dueDate = $items->VehicleAssuranceDueDate;
            
            $prevDate = $latestBill->VehicleAssuranceBillingDate ?? $items->VehicleAssurancePolisDate;
            // $prevDate = Carbon::createFromFormat("Y-m-d H:i:s", $prevDate);
            
            $currDate = date("Y-m-d", strtotime("+1 months", strtotime($prevDate)));
            // $currDate = $prevDate->copy()->addMonths(1)->toDateString();
            
            // latest date > due date
            // latest IsApproved = 0
            // latest IsApproved = null
            if($currDate <= $dueDate && (!empty($latestBill->IsApproved) || !isset($latestBill->IsApproved))) {
                $_p["VehicleAssuranceId"] = $items->VehicleAssuranceId;
                $_p["VehicleAssuranceBillingDate"] = $currDate;
                
                $assuranceBill = new VehicleAssuranceBilling();
                $assuranceBill
                    ->fill($_p)
                    ->save();
            }
        }
    }
}

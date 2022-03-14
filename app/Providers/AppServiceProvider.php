<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // incomplete purchase order's work order
        $incspk = DB::
            table('vw_purchaseorder_incomplete_spk')
            ->count();
        
        // incomplete purchase order
        $incpo = DB::
            table('vw_vehicle_incomplete_purchaseorder')
            ->count();
        
        // assurance due date
        $assdue = DB::
            table('vw_vehicle_assurance_duedate')
            ->count();
        
        // incomplete stnk
        $incstnk = DB::
            table('vw_vehicle_incomplete_stnk')
            ->count();
        
        // stnk due date
        $stnkdue = DB::
            table('vw_vehicle_stnk_duedate')
            ->count();
        
        $sum = $incspk + $assdue + $incpo + $incstnk + $stnkdue;
        
        // rent approval
        $rentApproval = DB::
            table('VehicleTrxRent')
            ->where('IsApprove', "!=", 1)
            ->count();
        
        $rentBillApproval = DB::
            table('VehicleTrxRentBilling')
            ->where('IsApproved', "!=", 1)
            ->count();
        
        $needApproval = $rentApproval + $rentBillApproval;
        
        view::share([
            'incspk' => $incspk,
            'assdue' => $assdue,
            'incpo' => $incpo,
            'incstnk' => $incstnk,
            'stnkdue' => $stnkdue,
            'sum' => $sum,
            'needApproval' => $needApproval,
        ]);
    }
}

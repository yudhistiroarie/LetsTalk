<?php

namespace App\Console\Commands;

use App\Models\VehicleTrxRent;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

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
        // return 0;
        
        VehicleTrxRent::
            where("VehicleTrxRentId", 1)
            ->update([
                "VehicleTrxRentPeriodMonth" => rand(1, 100),
            ]);
    }
}

<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\ShortSchedule\ShortSchedule;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\AdminBillingsCron::class,
    ];
    
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }
    
    /**
     * Define the application's command short schedule
     * 
     * @param \Spatie\ShortSchedule\ShortSchedule $shortSchedule
     * @return void
     */
    protected function shortSchedule(ShortSchedule $shortSchedule)
    {
        // $shortSchedule->command("demo:cron")->everySeconds(30)->withoutOverlapping();
        
        // admin billing schedule
        $shortSchedule->command("adminBillings:cron")->everySeconds(15)->withoutOverlapping();
    }
    
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        
        require base_path('routes/console.php');
    }
}

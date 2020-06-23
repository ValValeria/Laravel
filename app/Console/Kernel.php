<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\WebSocketServer as WebSock;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        WebSock::class
    ];

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
    protected function  schedule(Schedule $schedule){
        $schedule->command('serve')
            ->cron('* * * * *')->runInBackground();

        $schedule->command('websocket:init > websocket.log')->cron('* * * * *');    
       
    }

}

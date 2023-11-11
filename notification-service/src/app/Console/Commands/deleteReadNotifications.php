<?php

namespace App\Console\Commands;

use App\Models\Notification;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\DB;


class deleteReadNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-read-notifications';
    private $duration = 1;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $oneMinuteAgo = Carbon::now()->subMinute()->toDateTimeString();

        Notification::where('read_at', '<', $oneMinuteAgo)->delete();
        $this->info('Successfully cleared read notifications older than ' . $this->duration . ' minutes.');

    }
}

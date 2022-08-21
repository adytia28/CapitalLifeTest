<?php

namespace App\Console\Commands;

use App\Events\PointExpiredEvent;
use App\Models\Points;
use Illuminate\Console\Command;

class PointExpiredSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pointexpired:schedule';

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
        $checkPoint = Points::where('created_at', '<', date('Y-m-d H:i:s', strtotime(date('Y-m-01 00:00:00'))))->get();

        foreach($checkPoint as $point) {
            $point->delete();
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\Instagram2HaftaJob;
class Instagram2Hafta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:2hafta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Son 2 hafta içerisinde güncellenmeyen hesapları günceller';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        Instagram2HaftaJob::dispatch();
        return Command::SUCCESS;
    }
}

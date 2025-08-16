<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendmessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send {--m=}';
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
        // Get the value of the --m option
        $message = $this->option('m');
        broadcast(new \App\Events\SendMessage($message));
        
    }
}

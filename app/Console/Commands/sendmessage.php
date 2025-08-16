<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message; // Add this import

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
        // Store the message in the database
        Message::create(['message' => $message]);
        // Broadcast the event
        broadcast(new \App\Events\SendMessage($message));
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DebugRimbuk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'debug:rimbuk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets all debug accounts\' money to 999,999 NP';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::where('email', 'towerhufham@yahoo.com')->update(['np' => 999999]);
    }
}

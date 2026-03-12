<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Offer;

class ShopNuke extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shop:nuke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DANGER: Deletes ALL offers, even ones made by players!!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Offer::query()->delete();
    }
}

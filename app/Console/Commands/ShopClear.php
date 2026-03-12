<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Offer;

class ShopClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shop:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes all offers from the shop with a user_id of null.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Offer::where('user_id', null)->delete();
    }
}

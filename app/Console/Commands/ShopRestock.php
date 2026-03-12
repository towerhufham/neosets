<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Item;
use App\Models\Offer;

class ShopRestock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shop:restock';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds new items to the shop.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //WIP
        $stock = Offer::create([
            'user_id' => null,
            'item_id' => 1,
            'price' => 777
        ]);
    }
}

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
        $allItems = Item::all()->toArray();
        $rolls = floor(count($allItems) * 1.6);
        for ($i = 0; $i <= $rolls; $i++) {
            $itemIndex = array_rand($allItems);
            //todo: rarity
            $stock = Offer::create([
                'user_id' => null,
                'item_id' => $allItems[$itemIndex]['id'],
                'price' => $allItems[$itemIndex]['base_value']
            ]);
        }
    }
}

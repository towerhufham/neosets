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
            $item = $allItems[$itemIndex];
            if (rand(1, 100) >= $item['rarity']) {
                $priceMultiplier = rand(1240, 1920) / 1000;
                Offer::create([
                    'user_id' => null,
                    'item_id' => $item['id'],
                    'price' => floor($item['base_value'] * $priceMultiplier)
                ]);
            }
        }
    }
}

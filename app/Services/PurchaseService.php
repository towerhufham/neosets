<?php

namespace App\Services;

use App\Models\User;
use App\Models\Offer;
use App\Models\Purchase;
use App\Models\Inventory;
use Illuminate\Support\Facades\DB;

class PurchaseService {
  public function purchaseOne(Offer $offer, User $buyer): Purchase {
    return DB::transaction(function () use ($offer, $buyer) {

      //Make sure we have enough funds
      if ($buyer->np < $offer->price) {
        throw new \Exception("Not enough NP!");
      }

      //Take out the funds
      $buyer->decrement('np', $offer->price);

      //Add to buyer's inventory
      Inventory::create([
        'user_id' => $buyer->id,
        'item_id' => $offer->item->id
      ]);

      //Add funds to the seller if they exist
      if ($offer->seller) {
        $offer->seller->increment('np', $offer->price);
      }

      //Remove the offer
      $offer->delete();

      //Add a purchase record
      $purchase = Purchase::create([
        'buyer_id' => $buyer->id,
        'seller_id' => $offer->seller,
        'item_id' => $offer->item->id,
        'price' => $offer->price
      ]);

      //Done!
      return $purchase;
    });
  }

  public function purchaseMany($offers, User $buyer): array {
    return DB::transaction(function () use ($offers, $buyer) {

      //Sum the total cost
      $totalPrice = 0;
      foreach ($offers as $offer) {
        $totalPrice += $offer->price;
      }

      //Make sure we have enough funds
      if ($buyer->np < $totalPrice) {
        throw new \Exception("Not enough NP!");
      }
      
      //Purchase individually
      $purchases = [];
      foreach ($offers as $offer) {
        $purchases[] = $this->purchaseOne($offer, $buyer);
      }

      //Done!
      return $purchases;
    });
  }
}
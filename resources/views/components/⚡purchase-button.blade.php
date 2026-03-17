<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Services\PurchaseService;
use App\Models\Offer;

new class extends Component
{
    public function tryPurchase(array $offerIds): void {
        $service = new PurchaseService();
        $service->purchaseMany(Offer::findMany($offerIds), Auth::user());
    }
};
?>

<button 
x-show="$store.cart.count > 0" 
class="btn-main" 
type="button"
x-on:click="$wire.tryPurchase($store.cart.offers.map(o => o.id))">
    Purchase
</button>
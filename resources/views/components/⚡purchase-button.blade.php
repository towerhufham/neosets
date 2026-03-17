<?php

use Livewire\Component;

new class extends Component
{
    public function tryPurchase(array $offerIds): void {
        //
    }
};
?>

<button 
x-show="$store.cart.count > 0" 
class="btn-main" 
type="button"
x-on:click="$wire.">
    Purchase
</button>
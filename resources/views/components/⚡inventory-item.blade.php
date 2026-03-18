<?php

use Livewire\Component;
use App\Models\Inventory;
use App\Models\Item;

new class extends Component
{
    public $inventory;
    public $item;

    public function mount(Inventory $inventory): void {
        $this->inventory = $inventory;
        $this->item = $inventory->item;
    }
};
?>

<div class="flex flex-col justify-center items-center">
    <img 
    class="border border-blue-500"
    src="https://images.neopets.com/items/{{$item->img_name}}.gif" 
    alt="{{$item->name}}"/>
    <p class="font-bold font-serif text-center">{{$item->name}}</p>
    @if ($item->rarity === 100)
    <p class="text-amber-600 font-bold">(MEGA RARE)</p>
    @elseif ($item->rarity === 99)
    <p class="text-green-600 font-bold">(ultra rare)</p>
    @elseif ($item->rarity >= 95)
    <p class="text-green-600 font-bold">(super rare)</p>
    @elseif ($item->rarity >= 90)
    <p class="text-green-600 font-bold">(very rare)</p>
    @elseif ($item->rarity >= 85)
    <p class="text-green-600 font-bold">(rare)</p>
    @elseif ($item->rarity >= 75)
    <p class="text-green-600 font-bold">(uncommon)</p>
    @endif
</div>
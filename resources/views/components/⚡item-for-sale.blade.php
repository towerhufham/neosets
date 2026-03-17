<?php

use Livewire\Component;
use App\Models\Item;

new class extends Component
{
    public Item $item;
    public int $price;

    public function mount(Item $item, int $price): void {
        $this->item = $item;
        $this->price = $price;
    }
};
?>

<div class="flex flex-col justify-center items-center">
    <img 
    class="border border-blue-500"
    src="https://images.neopets.com/items/{{$item->img_name}}.gif" 
    alt="{{$item->name}}"/>
    <p class="font-bold font-serif text-center">{{$item->name}}</p>
    <p class="text-gray-500">{{number_format($price)}} NP</p>
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
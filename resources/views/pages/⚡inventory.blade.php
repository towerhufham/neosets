<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

new #[Layout('layouts.app')] #[Title('Inventory')] class extends Component
{
    public $inventories;

    public function mount(): void {
        $this->inventories = Auth::user()->inventory;
    }
};
?>

<div>
  <h1 class="w-full text-center text-xl">{{ Auth::user()->name }}'s Inventory</h1>
  <h2 class="w-full text-center text-md text-gray-300 italic">{{time()}}</h2>
  <div class="max-w-4xl mx-auto">
    <div class="grid grid-cols-6 gap-4">
      @foreach ($inventories as $inventory)
        <livewire:inventory-item :inventory="$inventory"/>
      @endforeach
    </div>
  </div>
</div>
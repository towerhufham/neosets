<?php

use Livewire\Component;

new class extends Component
{
    public int $count = 0;
    public function inc() {
        $this->count = $this->count + 1; 
    }
};
?>

<div>
    <p>Count is {{ $count }}</p>
    <p wire:click="inc">+1</p>
</div>
<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function decrement($py)
    {
        $this->count = $this->count - $py;
    }

    public function increment($py)
    {
        $this->count = $this->count + $py;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

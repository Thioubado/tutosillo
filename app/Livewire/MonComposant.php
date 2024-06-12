<?php

namespace App\Livewire;

use Livewire\Component;

class MonComposant extends Component
{
    public $message = 'coucou';
    public function render()
    {
        return view('livewire.mon-composant');
    }
}

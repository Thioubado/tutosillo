<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';


    public $todos = [];

    // public function mount()
    // {
    //     $this->todos = [
    //         'Take out trash',
    //         'Do dishes',
    //     ];
    // }

    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }


    public function add()
    {
        $this->todos[] = $this->todo;

        // le code ci-dessous permet de vider le input aprs avoir clique sur le bouton add
        $this->todo = '';
    }



    public function render()
    {
        return view('livewire.todos');
    }
}

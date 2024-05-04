<?php

namespace App\Livewire;

use Livewire\Component;

class CardEngineer extends Component
{

    public $id;
    public $engineer;


    public function render()
    {
        $this->engineer = config('appconstants.engineers')[$this->id];

        $this->engineer = json_decode(json_encode($this->engineer));

        return view('livewire.card-engineer');
    }
}

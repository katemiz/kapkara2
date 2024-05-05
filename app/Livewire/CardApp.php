<?php

namespace App\Livewire;

use Livewire\Component;

class CardApp extends Component
{
    public $uygulama;

    public function render()
    {

        // dd([$this->uygulama,$this->uygulama->name,$this->uygulama->url]);
        return view('livewire.card-app');
    }
}

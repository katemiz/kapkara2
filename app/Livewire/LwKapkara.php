<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Log;




class LwKapkara extends Component
{

    public $act;
    public $isActive;
    public $counter = 0;


    public function mount()
    {
        Log::info("mounting");
        $this->isActive = true;

        $this->act = request('act');
    }



    public function render()
    {
        return view('pages.'.$this->act);
    }


}

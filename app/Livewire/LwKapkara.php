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

    public $params;


    public function mount()
    {
        $this->isActive = true;
        $this->act = request('act');
        $this->params = json_decode(json_encode(config('appconstants')));
    }



    public function render()
    {
        return view('pages.'.$this->act);
    }


}

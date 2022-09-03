<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public  $changable = 'waled';
    public $number = 0;
    public $flag =0;
    public function render()
    {
        return view('livewire.counter');
    }
    public function IncrementAndDecrement($flag){
        ($flag)?$this->number++:$this->number--;
        
    }
    
}

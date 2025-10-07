<?php

namespace App\Livewire;

use Livewire\Component;

class Counter2 extends Component
{
    public int $count = 0;
    
     public function increment()
    {
        // $this->count = $this->count + 1;
        $this->count++;
    }

    public function decrement()
    {
        // $this->count = $this->count - 1;
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter2');
    }
}

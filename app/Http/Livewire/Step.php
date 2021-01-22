<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = [];

    public function increment()
    {
        $this->steps[] = count($this->steps)+1;
    }
    public function remove($index)
    {
        unset($this->steps[$index]);
        $this->steps = array_values($this->steps);

    }
    public function render()
    {
        return view('livewire.step');
    }
}

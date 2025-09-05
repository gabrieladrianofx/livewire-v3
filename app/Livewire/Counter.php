<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;
    public string $name = '';
    public string $lastName = '';

    public function mount()
    {
        $this->counter = 100;

        $this->fill([
            'name' => 'Gabriel',
            'lastName' => 'Adriano'
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }


}

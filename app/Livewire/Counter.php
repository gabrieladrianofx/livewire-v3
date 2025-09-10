<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Component;

class Counter extends Component
{
    #[Locked]
    public int $counter = 0;
    public string $name = 'Joe';
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

    public function refresh()
    {
        $this->reset('name', 'lastName');
    }

}

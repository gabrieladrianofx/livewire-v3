<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            Hello, from inline
        </div>
        HTML;
    }
}

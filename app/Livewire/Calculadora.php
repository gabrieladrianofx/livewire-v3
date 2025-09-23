<?php

namespace App\Livewire;

use Livewire\Component;

class Calculadora extends Component
{
    public ?string $num1 = null;
    public float $num2 = 0;

    public string $operator = '+';

    public ?float $result = null;

    public function render()
    {
        return view('livewire.calculadora');
    }

    public function calculate()
    {
        $tmp = "{$this->num1 }{$this->operator}{$this->num2};";

        $this->result = eval('return '. $tmp);
    }

    public function naoQueroY()
    {
        $this->num1 = str($this->num1)->replace('y', 'JERERE', true);
    }
}

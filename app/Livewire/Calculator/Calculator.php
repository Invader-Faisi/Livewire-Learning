<?php

namespace App\Livewire\Calculator;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;

class Calculator extends Component
{
    #[Title('Calculator')]

    public $input = 0;

    public $result = 0;

    public $operator;

    public function render()
    {
        return view('livewire.calculator.calculator');
    }

    public function resetInput()
    {
        $this->reset();
    }

    public function digit($digit)
    {
        if ($this->input == 0) {
            $this->input = $digit;
        } else {
            $this->input = $this->input . $digit;
        }
    }

    public function dot()
    {
        if (!Str::contains($this->input, ".")) {
            $this->input = $this->input . ".";
        }
    }

    public function operation($action)
    {
        if ($this->result == 0) {
            $this->result = $this->input;
            $this->input = '';
            $this->operator = $action;
        } else {
            $calculation = $this->result . $this->operator . $this->input;
            $this->result = eval("return $calculation;");
            $this->input = '';
            $this->operator = $action;
        }
    }

    public function clear()
    {
        if (Str::length($this->input > 1)) {
            $this->input = Str::substrReplace($this->input, '', -1);
        } else {
            $this->reset('input');
        }
    }

    public function calculate()
    {
        if ($this->input == null) {
            session()->flash('status', 'Invalid Operation');
        } else if ($this->operator == '/' && $this->input == 0) {
            session()->flash('status', 'Division by Zero is undefined');
        } else {
            $calculation = $this->result . $this->operator . $this->input;
            $this->result = eval("return $calculation;");
            $this->operator = null;
            $this->input = '';
        }
    }
}

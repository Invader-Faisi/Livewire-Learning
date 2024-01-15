<?php

namespace App\Livewire\Calculator;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;

class Calculator extends Component
{
    #[Title('Calculator')]

    public $input_output = 0;

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
        if ($this->input_output == 0) {
            $this->input_output = $digit;
        } else {
            $this->input_output = $this->input_output . $digit;
        }
    }

    public function operation($action)
    {
        if (Str::endsWith($this->input_output, ['+', '*', '-', '/', '.'])) {
            $this->input_output = Str::substrReplace($this->input_output, $action, -1);
        } else {
            $this->input_output = $this->input_output . $action;
        }
    }

    public function clear()
    {
        if (Str::length($this->input_output > 1)) {
            $this->input_output =
                Str::substrReplace($this->input_output, '', -1);
        } else {
            $this->reset('input_output');
        }
    }

    public function result()
    {
        if (Str::endswith($this->input_output, ['/', '+', '-', '*', '.'])) {
            session()->flash('status', 'Operation invalid');
        } elseif (Str::contains($this->input_output, '/0')) {
            session()->flash('status', 'division by zero is undefined');
        } else {
            $this->input_output = eval("return $this->input_output;");
        }
    }
}

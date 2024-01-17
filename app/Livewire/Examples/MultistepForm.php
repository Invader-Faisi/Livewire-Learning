<?php

namespace App\Livewire\Examples;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class MultistepForm extends Component
{
    #[Title('Multi Step Form')]

    public $first_name;

    public $last_name;

    public $email;

    public $current_step = 1;

    public function render()
    {
        return view('livewire.examples.multistep-form');
    }

    public function previous()
    {
        if ($this->current_step !== 1) {
            $this->current_step -= 1;
        }
    }

    public function next()
    {
        if ($this->current_step !== 3) {
            $this->formValidation();
            $this->current_step += 1;
        }
    }

    public function Click($step)
    {
        $this->current_step = $step;
        $this->formValidation();
    }

    public function formValidation()
    {
        if ($this->current_step === 1) {
            $this->validate([
                'first_name' => 'required | string | min:6'
            ]);
        }

        if ($this->current_step === 2) {
            $this->validate([
                'last_name' => 'required | string | min:6'
            ]);
        }

        if ($this->current_step === 3) {
            $this->validate([
                'email' => 'required | email'
            ]);
        }
    }
}

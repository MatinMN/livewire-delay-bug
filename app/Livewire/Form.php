<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $email;

    public function submitForm(){
        $this->validate([
            'email' => 'required|email|max:255'
        ]);
        
        sleep(1);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.form');
    }
}

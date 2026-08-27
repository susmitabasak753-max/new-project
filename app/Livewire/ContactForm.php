<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';
    
    public bool $submitted = false;

    protected array $rules = [
        'name' => 'required|string|min:2|max:100',
        'email' => 'required|email',
        'subject' => 'required|string|min:3|max:150',
        'message' => 'required|string|min:10|max:2000',
    ];

    public function submit(): void
    {
        $this->validate();

        $this->submitted = true;
        $this->reset(['name', 'email', 'subject', 'message']);
    }

    public function resetForm(): void
    {
        $this->submitted = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

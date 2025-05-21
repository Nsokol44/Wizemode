<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();
        // Send email or save to DB
        Mail::raw($this->message, function($mail) {
            $mail->to('your@email.com')
                 ->subject('New Contact: ' . $this->name)
                 ->replyTo($this->email);
        });
        session()->flash('success', 'Thank you for contacting us!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

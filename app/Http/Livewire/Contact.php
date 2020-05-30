<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use function session;
use function sleep;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $body;

    protected $validation = [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'min:1',
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function updated($field)
    {
        $this->validateOnly($field, $this->validation);
    }

    public function submit()
    {
        $this->validate($this->validation);

        $mail = new ContactFormMail($this->body);

        $mail
            ->to('zachvv11@gmail.com')
            ->subject($this->subject)
            ->replyTo($this->email, $this->name);

        Mail::send($mail);

        $this->email = null;
        $this->name = null;
        $this->subject = null;
        $this->body = null;


        session()->flash('message', 'Message received! We will be in touch 🕺');
    }
}

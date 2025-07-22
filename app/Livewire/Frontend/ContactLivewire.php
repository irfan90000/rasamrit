<?php

namespace App\Livewire\Frontend;

use App\Models\Query;
use Livewire\Component;

class ContactLivewire extends Component
{
    public $page_title = "Contact Us | Rasamarit - Healthy & Tasty Food";
    public $type, $name, $phone, $email, $message, $formstep;

    public function mount()
    {
        $this->type = null;
        $this->name = null;
        $this->phone = null;
        $this->email = null;
        $this->message = null;
        $this->formstep = 1;
    }

    public function render()
    {
        return view('frontend.contact')->layout('frontend.layout.app');
    }

    public function submitForm()
    {
        $this->validate([
            'type' => 'required',
            'name' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'message' => 'required',
        ],[
            'type.required' => 'Please select a type.',
            'name.required' => 'Please enter your name.',
            'phone.required' => 'Please enter your phone number.',
            'phone.digits' => 'Phone number must be 10 digits long.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message.',
        ]);

        $query = new Query;
        $query->type = $this->type;
        $query->name = $this->name;
        $query->phone = $this->phone;
        $query->email = $this->email;
        $query->message = $this->message;
        $query->save();

        $this->formstep = 2;
    }
}

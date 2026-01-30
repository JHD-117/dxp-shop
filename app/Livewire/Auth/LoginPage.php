<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class LoginPage extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.auth.login-page');
    }

    public function save()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

       if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
           session()->flash('error', 'Invalid credentials');
           return;
       }
       return redirect()->intended();
    }
}

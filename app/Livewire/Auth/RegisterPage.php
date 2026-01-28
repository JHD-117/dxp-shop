<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\User;

#[Title('Register')]
class RegisterPage extends Component
{
    public $name, $email, $password;

    public function render()
    {
        return view('livewire.auth.register-page');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);

        return redirect()->intended();
    }
}

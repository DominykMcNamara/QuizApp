<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegistrationForm extends Component
{
    use WithFileUploads;
    /** @var string */
    public $username = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $photo= '';

    /** @var string */
    public $passwordConfirmation = '';

    public function register()
    {
        $this->validate([
            'username' => ['required', 'unique:users', 'string', 'max:100', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'photo' => ['image'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'passwordConfirmation' => ['required'],
        ]);

        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'photo' => $this->photo ? $this->photo->storeAs('public/photos', $this->photo->getClientOriginalName()): null,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect('/')->with('status', 'Your account has been created.');
    }

    public function render()
    {
        return view('livewire.auth.registrationForm');
    }
}

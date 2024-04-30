<?php

    namespace App\Livewire\Auth;

    use App\Models\User;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
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

        public $photo;

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


            if ($this->photo) {
                $photo_path = $this->photo->store('photos', 'public');
            }
            $user = User::create([
                'username' => $this->username,
                'email' => $this->email,
                'photo' =>  $photo_path ?? null,
                'password' => Hash::make($this->password),
            ]);

            event(new Registered($user));

            Auth::login($user, true);

            return redirect('/quizselection')->with('message', 'Your account has been created.');
        }

        public function render()
        {
            return view('livewire.auth.registrationForm');
        }
    }

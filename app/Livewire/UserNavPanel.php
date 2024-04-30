<?php

    namespace App\Livewire;

    use Illuminate\Support\Facades\Auth;
    use Livewire\Component;

    class UserNavPanel extends Component
    {
        public $user;

        public function mount($user = null)
        {
            $this->user = Auth::user();
        }

        public function render()
        {
            return view('livewire.user-nav-panel', [
                'user_photo' => $this->user->photo,
                'username' => $this->user->username]);
        }
    }

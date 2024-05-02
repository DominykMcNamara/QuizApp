<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ThemeToggle extends Component
{
    public $theme;

    public function mount(Request $request): void
    {
        $this->theme = session('theme', 'light');
        logger("Theme: " . $this->theme);
    }

    public function toggleTheme(Request $request): void
    {
        $this->theme = $this->theme === 'light' ? 'dark' : 'light';
        session(['theme' => $this->theme]);

    }
    public function render()
    {
        return view('livewire.theme-toggle');
    }
}

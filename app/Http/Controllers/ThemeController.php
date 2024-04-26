<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function toggleTheme(Request $request) {
        $currentTheme = $request->session()->get('theme', 'light');
        $newTheme = $currentTheme === 'light' ? 'dark' : 'light';
        $request->session()->put('theme', $newTheme);
        return back();
    }
}

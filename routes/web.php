<?php

    use App\Http\Controllers\Auth\EmailVerificationController;
    use App\Http\Controllers\Auth\LogoutController;
    use App\Http\Controllers\ThemeController;
    use App\Livewire\Auth\Passwords\Confirm;
    use App\Livewire\Auth\Passwords\Email;
    use App\Livewire\Auth\Passwords\Reset;
    use App\Livewire\Auth\Verify;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */


    Route::middleware('guest')->group(function () {
        Route::view('/register', 'register')->name('register');
        Route::view('/login', 'login')->name('login');
    });

    Route::middleware('auth')->group(function () {
        Route::view('/', 'quizSelection')->name('quizSelection');

        Route::post('logout', LogoutController::class)
            ->name('logout');
    });

    // Route::post('/toggle-theme', [ThemeController::class, 'toggleTheme'])->name('toggle-theme');

/////////////////////////////////////////////////////////////////

    Route::get('password/reset', Email::class)
        ->name('password.request');

    Route::get('password/reset/{token}', Reset::class)
        ->name('password.reset');


    Route::middleware('auth')->group(function () {
        Route::get('email/verify', Verify::class)
            ->middleware('throttle:6,1')
            ->name('verification.notice');

        Route::get('password/confirm', Confirm::class)
            ->name('password.confirm');
    });

    Route::middleware('auth')->group(function () {

        Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
            ->middleware('signed')
            ->name('verification.verify');


    });



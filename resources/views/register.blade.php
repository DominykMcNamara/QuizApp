@extends('layouts.app')

@section('content')
<div class="tablet:flex   min-h-screen bg-gray-100">
    <div class="w-full max-w-md text-center">
        <h1 class="text-hm font-regular">Welcome to the <br class="mobile:hidden">
        <span class="text-hm font-bold" >Frontend Quiz!</span>
        </h1>
        <p class="text-sm italic my-5">Please register to continue</p>
        <a href="/login" class="text-sm font-bold cursor-pointer" wire:navigate>Already have an account? <span
                class="hover:text-light-bluish">Login</span></a>
    </div>


    @livewire('auth.register')
</div>

@endSection

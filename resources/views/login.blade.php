@extends('layouts.app')

@section('content')
    <div class="min-h-screen desktop:flex desktop:items-center desktop:justify-center">

        <div class="w-full max-w-md  mx-auto text-center tablet:text-start">
            <h1 class="text-hm tablet:text-hl  font-regular">Welcome to the <br
                    class="tablet:hidden">
                <span class="text-hm tablet:text-hl font-bold">Frontend Quiz!</span>
            </h1>
            <p class="text-sm italic my-5">Please log in to continue</p>
            <a href="/register" class="text-sm font-bold cursor-pointer">Don't have an account? <span
                    class="hover:text-light-bluish">Register</span></a>
        </div>

        <div class="desktop:mx-auto">
           @livewire('auth.loginForm')
        </div>
    </div>

@endSection

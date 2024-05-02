<nav class="flex min-w-screen justify-around items-center h-32">
   <!-- @livewire('theme-toggle') !-->
    @auth()
        @livewire('user-nav-panel')
    @endauth
</nav>

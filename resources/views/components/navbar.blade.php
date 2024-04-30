<nav class="flex min-w-screen justify-around items-center h-32">
    @livewire('theme-toggle')
    @auth()
        <a href="{{ route('logout') }}"
           class="bg-purple hover:opacity-80 text-white text-center py-2 px-4 rounded-md"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <img src="storage/{{ Auth::user()->photo }}" alt="{{ Auth::user()->username }}" class="w-12 h-12
        rounded-full" >
    @endauth
</nav>

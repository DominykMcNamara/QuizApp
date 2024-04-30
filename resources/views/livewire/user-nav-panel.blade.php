<div class="flex items-center gap-2">
    <a href="{{ route('logout') }}"
       class="bg-purple hover:opacity-80 text-white text-center py-2 px-4 rounded-md"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
    >
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <img src="storage/{{ $user->photo }}" alt="{{ $user->username }}" class="w-12 h-12
        rounded-full" >
    <p class="text-purple font-bold">{{ $user->username }}</p>
</div>


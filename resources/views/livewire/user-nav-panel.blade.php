<div class="flex items-center gap-2">
    <p class="text-purple font-bold">{{ $user->username }}</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div x-data="{ open: false }">
    <img x-on:click="open = !open" src="storage/{{ $user->photo }}" alt="{{ $user->username }}" class="w-12 h-12
        rounded-full cursor-pointer" >
        <div x-show="open" class="absolute w-32 h-32 ">
            <a href="{{ route('logout') }}"
               class="  text-center hover:text-light-bluish hover:underline dark:hover:text-light-bluish"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                Logout
            </a>
        </div>
    </div>
</div>


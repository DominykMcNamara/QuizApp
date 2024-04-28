<div>
    <div class="mt-8 mobile:w-full   tablet:mx-auto  tablet:w-1/2 desktop:w-full tablet:flex tablet:flex-col">
        <form wire:submit.prevent="authenticate">
            <div>
                <label for="email" class="block text-sm font-medium  leading-5">
                    Email Address
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="email" id="email" type="text" required autofocus
                           class="appearance-none block w-full px-3 py-2  rounded-md
                               placeholder-light-grey border
                               transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('username')
                                text-red border-red  focus:border-red  @enderror"/>
                </div>

                @error('email')
                <p class="mt-2 text-sm text-red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6">
                <label for="password" class="block text-sm font-medium  leading-5">
                    Password
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="password" id="password" type="password" required
                           class="appearance-none block w-full px-3 py-2 border rounded-md placeholder-light-grey
                                transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                @error('password') border-red text-red focus:border-red
                                focus:ring-red @enderror"/>
                </div>

                @error('password')
                <p class="mt-2 text-sm text-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="bg-purple hover:opacity-80 text-white w-full text-center py-2 px-4
                        rounded-md">
                            Log In
                        </button>
                    </span>
            </div>
        </form>
    </div>
</div>


<div>
    <div class="mt-8 mobile:w-full   tablet:mx-auto  tablet:w-1/2 desktop:w-full tablet:flex tablet:flex-col">
        <div class= "px-6 py-8   sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="register">
                <div>
                    <label for="username" class="block text-sm font-medium  leading-5">
                        Username
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="username" id="username" type="text" required autofocus
                               class="appearance-none block w-full px-3 py-2  rounded-md
                               placeholder-light-grey border
                               transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('username')
                                text-red border-red  focus:border-red  @enderror"/>
                    </div>

                    @error('username')
                    <p class="mt-2 text-sm text-red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium   leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" type="email" required class="
                        appearance-none block  placeholder-light-grey w-full px-3 py-2 border
                        rounded-md
                        focus:outline-none f transition duration-150 ease-in-out sm:text-sm sm:leading-5
                        @error('email') border-red text-red  focus:border-red focus:ring-red @enderror"/>
                    </div>

                    @error('email')
                    <p class="mt-2 text-sm text-red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="photo" class="block text-sm font-medium  leading-5">
                        Profile Picture
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="photo" id="photo" type="file" class="appearance-none block
                        w-full px-3 py-2 border rounded-md placeholder-light-grey
                        transition duration-150 ease-in-out sm:text-sm
                        sm:leading-5 @error('photo') border-red text-red
                        focus:border-red focus:ring-red @enderror"/>
                    </div>

                    @error('photo')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
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
                    <label for="password_confirmation" class="block text-sm font-medium  leading-5">
                        Confirm Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password"
                               required
                               class="block w-full px-3 py-2 border appearance-none rounded-md  transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="bg-purple hover:opacity-80 text-white w-full text-center py-2 px-4
                        rounded-md">
                            Register
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

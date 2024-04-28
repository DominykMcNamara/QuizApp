@section('title', 'Create a new account')

<div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8   sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="register">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 leading-5">
                        Username
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="username" id="username" type="text" required autofocus
                               class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md
                               placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300
                               transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('username')
                               border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('username')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Email address
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="photo" class="block text-sm font-medium text-gray-700 leading-5">
                        Profile Picture
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="photo" id="photo" type="file"  class="appearance-none block
                        w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none
                        focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm
                        sm:leading-5 @error('photo') border-red-300 text-red-900 placeholder-red-300
                        focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                        Confirm Password
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="bg-purple text-white w-full text-center py-2 px-4 border
                        border-transparent rounded-md">
                            Register
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

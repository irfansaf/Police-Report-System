<x-guest-layout>
    <div class="w-full max-w-md rounded-xl box-on-hover hover:bg-blue-600 border ease-in-out duration-100 transform hover:-translate-y-3 hover:-translate-x-3 px-4 py-14">
        <div class="flex flex-col justify-center items-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <p class="text-sm text-white mt-1 hover:text-gray-200">Make the environment better. for live</p>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="flex flex-col justify-center items-end my-8 px-10">
                <!-- Name -->
                    <x-text-input placeholder="Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <!-- Email Address -->
                    <x-text-input placeholder="E-mail" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <!-- Password -->

                    <x-text-input placeholder="Password" id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Confirm Password -->

                    <x-text-input placeholder="Repeat Password" id="password_confirmation" class="block mt-1 w-full"
                                  type="password"
                                  name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>

        </form>
    </div>
</x-guest-layout>

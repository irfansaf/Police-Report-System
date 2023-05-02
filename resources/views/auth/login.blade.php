<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full max-w-md rounded-xl box-on-hover hover:bg-blue-600 border ease-in-out duration-100 transform hover:-translate-y-3 hover:-translate-x-3 px-4 py-14">
        <div class="flex flex-col justify-center items-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <p class="text-sm text-white mt-1 hover:text-gray-200">Make the environment better. for live</p>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf

        <div class="flex flex-col justify-center items-end my-8 px-10">
                <x-text-input placeholder="Email" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <x-text-input placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>

        </form>
    </div>
</x-guest-layout>

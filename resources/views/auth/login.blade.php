<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        
        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <!-- Session Status -->
        <!-- Inform the user about the status of the login attempt (like a message for password reset) -->
        {{-- @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif --}}

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email">{{ __('Email') }}</x-label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                {{-- <x-input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="" /> --}}
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password">{{ __('Password') }}</x-label>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                
                {{-- <input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="" /> --}}
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    
                    {{-- <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span> --}}
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
                <x-button type="submit" class="ms-4">
                    {{ __('Log in') }}
                </x-button>
                {{-- <button type="submit">{{ __('Log in') }}</button> --}}
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

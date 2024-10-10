<x-guest-layout>
    <style>
        body {
            background-color: #f8f8f8; /* Light background */
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }

        .block input {
            border: 2px solid #000;
            background-color: #f1f1f1;
            color: #000;
            padding: 0.75rem;
            font-size: 14px;
            border-radius: 4px;
        }

        .block input:focus {
            border-color: #333;
            background-color: #fff;
        }

        .mt-4 label {
            font-weight: bold;
            color: #333;
        }

        .checkbox-container label {
            color: #333;
        }

        .underline {
            color: #333;
        }

        .underline:hover {
            color: #000;
        }

        .ms-3 button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .ms-3 button:hover {
            background-color: #333;
        }

        .forgot-password {
            color: #333;
            font-size: 14px;
        }

        .forgot-password:hover {
            color: #000;
        }

        .text-gray-600 {
            color: #555;
        }
    </style>

    <div class="form-container">
        <h1>Login to Your Account</h1>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="block">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 block">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 checkbox-container">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-black shadow-sm focus:ring-black" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm forgot-password hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>

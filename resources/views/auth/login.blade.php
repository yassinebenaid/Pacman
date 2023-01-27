<x-guest-layout>
    <!-- Session Status -->
    <x-breeze.auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}"
        class="after:content-[''] after:p-20 after:-top-6 after:rounded-tl-lg after:rounded-[10rem] after:-left-8 after:-z-10  after:bg-primary after:absolute relative before:content-[''] before:p-20 before:-bottom-6 before:rounded-br-lg before:rounded-[10rem] before:-right-8 before:-z-10  before:bg-primary before:absolute">

        @csrf

        <!-- Email Address -->
        <div>
            <x-breeze.input-label for="email" :value="__('Email')" />
            <x-breeze.text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                required />
            <x-breeze.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-breeze.input-label for="password" :value="__('Password')" />

            <x-breeze.text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />

            <x-breeze.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-end gap-2 mt-4">

            <div class="flex justify-end w-full">
                <x-breeze.primary-button>{{ __('Log in') }}</x-breeze.primary-button>
            </div>


            <div class="flex justify-center w-full gap-2 py-2 mt-2 border-t border-gray-2">

                @if (Route::has('password.request'))
                    <a class="text-sm rounded-md hover:underline text-primary hover:text-gray-900 "
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>


                    Or

                    <a class="text-sm rounded-md text-primary hover:underline " href="{{ route('register') }}">
                        <span> {{ __('create new accout') }}
                    </a>
                @endif

            </div>


        </div>


    </form>
</x-guest-layout>

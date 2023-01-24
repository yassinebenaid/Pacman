<x-guest-layout>
    <form method="POST" action="{{ route('register') }}"
        class="after:content-[''] after:p-20 after:-top-6 after:rounded-tl-lg after:rounded-[10rem] after:-left-8 after:-z-10  after:bg-primary after:absolute relative before:content-[''] before:p-20 before:-bottom-6 before:rounded-br-lg before:rounded-[10rem] before:-right-8 before:-z-10  before:bg-primary before:absolute">

        @csrf

        <!-- Name -->
        <div>
            <x-breeze.input-label for="name" :value="__('Name')" />
            <x-breeze.text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')"
                required autofocus />
            <x-breeze.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-breeze.input-label for="email" :value="__('Email')" />
            <x-breeze.text-input id="email" class="block w-full mt-1" type="email" name="email"
                :value="old('email')" required />
            <x-breeze.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-breeze.input-label for="password" :value="__('Password')" />

            <x-breeze.text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="new-password" />

            <x-breeze.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-breeze.input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-breeze.text-input id="password_confirmation" class="block w-full mt-1" type="password"
                name="password_confirmation" required />

            <x-breeze.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm underline rounded-md hover:text-primary text-gray-3 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-breeze.primary-button class="ml-4">
                {{ __('Register') }}
            </x-breeze.primary-button>
        </div>
    </form>
</x-guest-layout>

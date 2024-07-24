<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'companyName' => ['required', 'string', 'max:255'],
            'contactName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="h-full flex w-full">
    <div class="w-full hidden md:grid place-items-center p-10">
        <img draggable="false" src="{{ Vite::asset('resources/images/auth.svg') }}" alt="">
    </div>
    <div class="w-full p-2 md:p-0 md:w-1/2 h-full grid place-items-center">
        <div class="flex flex-col gap-5">
            <img draggable="false" class="w-1/2 rounded-md p-2 bg-white" src="{{ Vite::asset('resources/images/lapasarlogo.png') }}"
                alt="">
            <p class="text-3xl font-bold text-orange-500">
                Hi there, Welcome to Lapasar.com!
            </p>
            <div class="bg-white p-5 rounded-2xl">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <p class="text-center my-5 text-black">
                    Enter your personal details and start your journey with us.
                </p>
                <form wire:submit="login">
                    <!-- Company Name -->
                    <div>
                        <div class="flex items-center gap-2">
                            🏢
                            <x-text-input wire:model="form.companyName" id="companyName" class="block mt-1 w-full"
                                type="text" name="companyName" required autofocus autocomplete="companyName"
                                placeholder="Company Name" />
                        </div>
                        <x-input-error :messages="$errors->get('form.companyName')" class="mt-2" />
                    </div>

                    <!-- Contact Person Name-->
                    <div class="mt-4">
                        <div class="flex items-center gap-2">
                            🧑
                            <x-text-input wire:model="form.contactName" id="contactName" class="block mt-1 w-full"
                                type="text" name="contactName" required autofocus autocomplete="contactName"
                                placeholder="Contact person Name" />
                        </div>
                        <x-input-error :messages="$errors->get('form.contactName')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <div class="flex items-center gap-2">
                            👥
                            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full"
                                type="email" name="email" required autofocus autocomplete="username"
                                placeholder="Email" />
                        </div>
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Mobile phone -->
                    <div class="mt-4">
                        <div class="flex items-center gap-2">
                            📱
                            <x-text-input wire:model="form.phone" id="phone" class="block mt-1 w-full"
                                type="tel" name="phone" required autocomplete="current-phone"
                                placeholder="Mobile Number" />
                        </div>
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />

                        <!-- Agreed Checkbox -->
                        <div class="block mt-4">
                            <label for="remember" class="inline-flex items-center">
                                <input x-model="agreed" id="agreed" type="checkbox"
                                    class="rounded  border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="remember">
                                <span
                                    class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('I have read and agreed to the ') }}</span>
                                <a class="text-xs ml-1 text-blue-400"
                                    href="https://app-uat.lapasar.com/app/buyers/Buyer TnCs.pdf" target="_blank">Terms
                                    &amp; Policy</a>
                            </label>
                        </div>
                    </div>

                    <!-- Show Password -->

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Sign Up') }}
                        </x-primary-button>
                    </div>
                    <div class="flex justify-between mt-5">
                        @if (Route::has('login'))
                            <a class="hover:underline text-sm text-[#337ab7] " href="{{ route('login') }}"
                                wire:navigate>
                                {{ __('Already a member? Sign in here.') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
            <p class="text-center text-xs">
                Copyright 2019 | Lapasar.com
            </p>
        </div>
    </div>
</div>

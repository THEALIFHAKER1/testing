<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="h-full flex w-full">
    <div class="w-full place-items-center p-10 hidden md:grid">
        <img draggable="false" src="{{ Vite::asset('resources/images/auth.svg') }}" alt="">
    </div>
    <div class="w-full p-2 md:p-0 md:w-1/2 h-full grid place-items-center">
        <div class="flex flex-col gap-5">
            <img
                draggable="false"
                class="w-1/2 bg-white rounded-md p-2"
                src="{{ Vite::asset('resources/images/lapasarlogo.png') }}"
                alt=""
            >
            <p class="text-3xl font-bold text-orange-500">
                Welcome Back!
            </p>
            <div class="bg-white p-5 rounded-2xl">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <p class="text-center my-5 text-black">
                    Sign in to start your session
                </p>
                <form wire:submit="login">
                    <!-- Email Address -->
                    <div>
{{--                        <x-input-label for="email" :value="__('Email')" />--}}
                        <div class="flex items-center gap-2">
                            👥
                            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" placeholder="Username (Email Address)"/>
                        </div>
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4" x-data="{ showPassword: false }">
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        <div class="flex items-center gap-2">
                            🔑
                            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                                          x-bind:type="showPassword ? 'text' : 'password'"
                                          name="password"
                                          required autocomplete="current-password"
                                          placeholder="Password"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />

                        <!-- Show Password Checkbox -->
                        <div class="block mt-4">
                            <label for="remember" class="inline-flex items-center">
                                <input x-model="showPassword" id="remember" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Show Password') }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- Show Password -->

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Sign In') }}
                        </x-primary-button>
                    </div>
                    <div class="flex justify-between mt-5">
                        @if (Route::has('register'))
                            <a class="hover:underline text-sm text-[#337ab7] " href="{{ route('register') }}" wire:navigate>
                                {{ __('Register a new membership') }}
                            </a>
                        @endif

                        @if (Route::has('password.request'))
                            <a class="hover:underline text-sm text-[#337ab7] " href="{{ route('password.request') }}" wire:navigate>
                                {{ __('Forgot Password?') }}
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

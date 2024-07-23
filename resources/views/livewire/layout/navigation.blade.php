<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <nav class="bg-white dark:bg-foreground/20 h-full w-[270px] flex-col lg:flex hidden">
        <div class="flex-grow gap-2 flex flex-col overflow-auto">
            <div class="h-36 grid place-items-center gap-2 p-2">
                <img class="h-24 aspect-square rounded-full"
                    src="https://app-uat.lapasar.com/app/buyers/uploads/user/16995988830.JPG" alt="">

                <ul class="w-full">
                    <li class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex items-center ">
                            <div class="text-xs text-left">
                                <div class="font-bold" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                    x-on:profile-updated.window="name = $event.detail.name"></div>
                                <div>{{ auth()->user()->email }}</div>
                            </div>
                            <svg class="ml-auto h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul x-show="open"
                            class="w-full bg-white dark:bg-zinc-900 divide-y text-sm absolute shadow-md rounded-md">
                            <li>
                                <a href="/profile" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                                    <span class="icon">👤</span>
                                    <span class="ml-2">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" wire:click="logout"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                                    <span class="icon">🚪</span>
                                    <span class="ml-2">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="bg-background py-2 px-3 font-semibold w-full text-xs">Menu</div>
            <div x-data="{ openMenu: null }" class="text-sm font-semibold overflow-y-auto">
                <ul>
                    <li class="group">
                        <a href="/" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                            <span class="icon">🏠</span>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li class="group">
                        <a href="/manage-location" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                            <span class="icon">🧭</span>
                            <span class="ml-2">Manage Location</span>
                        </a>
                    </li>
                    <li x-data="{ id: 1 }">
                        <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                            class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">👥</span>
                            <span class="ml-2">Manage Users</span>
                            <span class="ml-auto" x-show="openMenu !== id">+</span>
                            <span class="ml-auto" x-show="openMenu === id">-</span>
                        </a>
                        <ul x-show="openMenu === id" class="pl-8 ">
                            <li>
                                <a href="/user-roles"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">User Roles</a>
                            </li>
                            <li>
                                <a href="/list-of-users"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">List of Users</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/manage-workflow" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">🔧</span>
                            <span class="ml-2">Manage Workflow</span>
                        </a>
                    </li>
                    <li x-data="{ id: 2 }">
                        <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                            class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">📦</span>
                            <span class="ml-2">Manage Orders</span>
                            <span class="ml-auto" x-show="openMenu !== id">+</span>
                            <span class="ml-auto" x-show="openMenu === id">-</span>
                        </a>
                        <ul x-show="openMenu === id" class="pl-8 ">
                            <li>
                                <a href="/manage-orders"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage Orders</a>
                            </li>
                            <li>
                                <a href="/manage-pre-orders"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage
                                    Pre-Orders</a>
                            </li>
                            <li>
                                <a href="/manage-budget-request"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage Budget
                                    Request</a>
                            </li>
                            <li>
                                <a href="/manage-cart-id"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage Cart
                                    ID</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/news" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">🔔</span>
                            <span class="ml-2">News (7)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">💬</span>
                            <span class="ml-2">Chat</span>
                        </a>
                    </li>
                    <li x-data="{ id: 3 }">
                        <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                            class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">💰</span>
                            <span class="ml-2">Manage Budget</span>
                            <span class="ml-auto" x-show="openMenu !== id">+</span>
                            <span class="ml-auto" x-show="openMenu === id">-</span>
                        </a>
                        <ul x-show="openMenu === id" class="pl-8 ">
                            <li>
                                <a href="#"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage
                                    Budget</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage GL
                                    CODE</a>
                            </li>
                        </ul>
                    </li>
                    <li x-data="{ id: 4 }">
                        <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                            class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">⚖️</span>
                            <span class="ml-2">Manage Unit Limit Exception</span>
                            <span class="ml-auto" x-show="openMenu !== id">+</span>
                            <span class="ml-auto" x-show="openMenu === id">-</span>
                        </a>
                        <ul x-show="openMenu === id" class="pl-8 ">
                            <li>
                                <a href="#"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">User to
                                    except</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Logs
                                    transaction</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">📊</span>
                            <span class="ml-2">Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="/customize-report"
                            class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                            <span class="icon">⚙️</span>
                            <span class="ml-2">Customize Report</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="mt-auto flex gap-2 border-t p-2">
            <img class="w-5" src="https://app-uat.lapasar.com/app/buyers/assets2/images/lapasarfav.png"
                alt="">
            <p class="text-xs">Copyright 2019 | Lapasar.com</p>
        </div>
    </nav>
    <div x-data="{ open: false }" class="lg:hidden fixed z-50">
        <div class="fixed top-0 right-0 p-2 flex items-end justify-end w-fit h-fit z-50">
            <button class="p-2 rounded-full bg-primary border-white border-2" @click="open = !open">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        {{-- a mobile navbar that slide from right --}}
        <nav class="fixed top-0 right-0 bg-background h-full w-[270px] flex-col flex"
        x-show="open" @click.away="open = false" x-cloak>
            <div class="flex-grow gap-2 flex flex-col overflow-auto">
                <div class="h-36 grid place-items-center gap-2 p-2">
                    <img class="h-24 aspect-square rounded-full"
                        src="https://app-uat.lapasar.com/app/buyers/uploads/user/16995988830.JPG" alt="">
                    <ul class="w-full">
                        <li class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="w-full flex items-center ">
                                <div class="text-xs text-left">
                                    <div class="font-bold" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                        x-on:profile-updated.window="name = $event.detail.name"></div>
                                    <div>{{ auth()->user()->email }}</div>
                                </div>
                                <svg class="ml-auto h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <ul x-show="open"
                                class="w-full bg-white dark:bg-zinc-900 divide-y text-sm absolute shadow-md rounded-md">
                                <li>
                                    <a href="/profile"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                                        <span class="icon">👤</span>
                                        <span class="ml-2">Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" wire:click="logout"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                                        <span class="icon">🚪</span>
                                        <span class="ml-2">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="bg-background py-2 px-3 font-semibold w-full text-xs">Menu</div>
                <div x-data="{ openMenu: null }" class="text-sm font-semibold overflow-y-auto">
                    <ul>
                        <li class="group">
                            <a href="/" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                                <span class="icon">🏠</span>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="group">
                            <a href="/manage-location"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                                <span class="icon">🧭</span>
                                <span class="ml-2">Manage Location</span>
                            </a>
                        </li>
                        <li x-data="{ id: 1 }">
                            <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">👥</span>
                                <span class="ml-2">Manage Users</span>
                                <span class="ml-auto" x-show="openMenu !== id">+</span>
                                <span class="ml-auto" x-show="openMenu === id">-</span>
                            </a>
                            <ul x-show="openMenu === id" class="pl-8 ">
                                <li>
                                    <a href="/user-roles"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">User
                                        Roles</a>
                                </li>
                                <li>
                                    <a href="/list-of-users"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">List of
                                        Users</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/manage-workflow"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">🔧</span>
                                <span class="ml-2">Manage Workflow</span>
                            </a>
                        </li>
                        <li x-data="{ id: 2 }">
                            <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">📦</span>
                                <span class="ml-2">Manage Orders</span>
                                <span class="ml-auto" x-show="openMenu !== id">+</span>
                                <span class="ml-auto" x-show="openMenu === id">-</span>
                            </a>
                            <ul x-show="openMenu === id" class="pl-8 ">
                                <li>
                                    <a href="/manage-orders"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage
                                        Orders</a>
                                </li>
                                <li>
                                    <a href="/manage-pre-orders"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage
                                        Pre-Orders</a>
                                </li>
                                <li>
                                    <a href="/manage-budget-request"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage
                                        Budget
                                        Request</a>
                                </li>
                                <li>
                                    <a href="/manage-cart-id"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage Cart
                                        ID</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/news" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">🔔</span>
                                <span class="ml-2">News (7)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">💬</span>
                                <span class="ml-2">Chat</span>
                            </a>
                        </li>
                        <li x-data="{ id: 3 }">
                            <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">💰</span>
                                <span class="ml-2">Manage Budget</span>
                                <span class="ml-auto" x-show="openMenu !== id">+</span>
                                <span class="ml-auto" x-show="openMenu === id">-</span>
                            </a>
                            <ul x-show="openMenu === id" class="pl-8 ">
                                <li>
                                    <a href="#"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage
                                        Budget</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Manage GL
                                        CODE</a>
                                </li>
                            </ul>
                        </li>
                        <li x-data="{ id: 4 }">
                            <a href="#" @click.prevent="openMenu = openMenu === id ? null : id"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">⚖️</span>
                                <span class="ml-2">Manage Unit Limit Exception</span>
                                <span class="ml-auto" x-show="openMenu !== id">+</span>
                                <span class="ml-auto" x-show="openMenu === id">-</span>
                            </a>
                            <ul x-show="openMenu === id" class="pl-8 ">
                                <li>
                                    <a href="#"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">User to
                                        except</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">Logs
                                        transaction</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">📊</span>
                                <span class="ml-2">Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="/customize-report"
                                class="flex items-center p-4 hover:bg-gray-200 hover:text-primary">
                                <span class="icon">⚙️</span>
                                <span class="ml-2">Customize Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-auto flex gap-2 border-t p-2">
                <img class="w-5" src="https://app-uat.lapasar.com/app/buyers/assets2/images/lapasarfav.png"
                    alt="">
                <p class="text-xs">Copyright 2019 | Lapasar.com</p>
            </div>
        </nav>
    </div>
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Workflow') }}
        </h2>
    </x-slot>
    <x-slot name="action">

        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150">
                <div class=""">
                    OTHER
                </div>
                <svg class="ml-auto h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul x-show="open" class="w-full bg-white dark:bg-zinc-900 divide-y text-sm absolute shadow-md rounded-md">
                <li>
                    <a href="/profile" class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                        <span>
                            Remove By Charge Code
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" wire:click="logout"
                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                        <span>
                            Replace Requestor
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" wire:click="logout"
                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                        <span>
                            Replace Approve
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" wire:click="logout"
                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                        <span>
                            Set Temporary Approver
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" wire:click="logout"
                        class="flex items-center p-4 hover:bg-gray-200 hover:text-primary ">
                        <span>
                            Export To Excel
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <x-primary-button>
            ADD NEW WORKFLOW
        </x-primary-button>
        <x-primary-button>
            WORKFLOW DEFINITION
        </x-primary-button>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF WORKFLOW
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 gap-5 flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Workflow Name" />
                </div>
                <div class="w-full md:w-1/3 ">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Location</option>
                        <option value="Azhan">All</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Charge Code</option>
                        <option value="Azhan">All</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Raiser</option>
                        <option value="Azhan">All</option>
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Approver</option>
                        <option value="Azhan">All</option>
                    </select>
                </div>
                <div class="">
                    <button wire:click="resetFilters"
                        class="bg-red-500 text-white px-4 py-2 rounded h-full w-full md:w-fit">Reset</button>
                </div>
            </div>
                <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                    <div class="flex flex-col md:flex-row gap-2 justify-between">
                        <div class="text-start font-light justify-start self-center">
                            <div class="text-sm">
                                Showing 0 to 0 of 0 entries
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
                        <table class="w-full border rounded-md overflow-hidden p-1">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="py-2 p-5 border">No.</th>
                                    <th class="py-2 p-5 border w-full">Workflow Name</th>
                                    <th class="py-2 p-5 border">Request Type</th>
                                    <th class="py-2 p-5 border">Location</th>
                                    <th class="py-2 p-5 border">Charge Code</th>
                                    <th class="py-2 p-5 border">Price Range</th>
                                    <th class="py-2 p-5 border">Workflow</th>
                                    <th class="py-2 p-5 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-foreground/20">
                                    <td class="py-2 p-5 border text-center text-red-400" colspan="8">
                                        No Workflow Settings Found
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 justify-between">
                        <div class="text-start font-light justify-start self-center">
                            <div class="text-sm">
                                Showing 0 to 0 of 0 entries
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>

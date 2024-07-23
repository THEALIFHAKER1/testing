<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <x-primary-button>
           ➕ ADD NEW ROLE
        </x-primary-button>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF USERS
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 gap-5 flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Role" />
                </div>
                <div class="w-full md:w-1/3">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Status</option>
                        <option value="Azhan">All</option>
                        <option value="Azhan">Enable</option>
                        <option value="Azhan">Disable</option>
                    </select>
                </div>
                <div class="md:ml-auto">
                    <button wire:click="resetFilters" class="bg-red-500 text-white px-4 py-2 rounded w-full md:w-fit">Reset</button>
                </div>
            </div>
                <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                    <div class="flex flex-col md:flex-row gap-2 justify-between">
                        <div class="text-start font-light justify-start self-center">
                            <div class="text-sm">
                                Showing 1 to 2 of 2 entries
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
                        <table class="w-full border rounded-md overflow-hidden p-1">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="py-2 p-5 border">No.</th>
                                    <th class="py-2 p-5 border w-full">Role</th>
                                    <th class="py-2 p-5 border">Status</th>
                                    <th class="py-2 p-5 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td class="py-2 p-5 border">1</td>
                                    <td class="py-2 p-5 border">Admin2</td>
                                    <td class="py-2 p-5 border">
                                        <button class="bg-primary text-white px-4 py-2 rounded">ENABLE</button>
                                    </td>
                                    <td class="py-2 p-5 border">
                                        <button class="bg-primary text-white px-4 py-2 rounded">PAGE ACCESS</button>
                                        <button class="bg-primary text-white px-4 py-2 rounded">MANAGE CATEGORY</button>
                                        <button class="bg-primary text-white px-4 py-2 rounded">EDIT</button>
                                    </td>
                                </tr>
                                <tr class="bg-foreground/20">
                                    <td class="py-2 p-5 border">2</td>
                                    <td class="py-2 p-5 border">PunchOut</td>
                                    <td class="py-2 p-5 border">
                                        <button class="bg-primary text-white px-4 py-2 rounded">ENABLE</button>
                                    </td>
                                    <td class="py-2 p-5 border">
                                        <button class="bg-primary text-white px-4 py-2 rounded">PAGE ACCESS</button>
                                        <button class="bg-primary text-white px-4 py-2 rounded">MANAGE CATEGORY</button>
                                        <button class="bg-primary text-white px-4 py-2 rounded">EDIT</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 justify-between">
                        <div class="text-start font-light justify-start self-center">
                            <div class="text-sm">
                                Showing 1 to 2 of 2 entries
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>

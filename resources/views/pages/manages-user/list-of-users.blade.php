<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <x-primary-button>
            ➕ ADD NEW USER
        </x-primary-button>
        <x-primary-button disable>
            ✉️ Send Activation Email
        </x-primary-button>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF USER ROLES
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 gap-5 flex-col md:flex-row">
                <div class="">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="User Name" />
                </div>
                <div class="">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Email" />
                </div>
                <div class="">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Staff ID" />
                </div>
                <div class="">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Role" />
                </div>
                <div class="md:w-60">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Role</option>
                        <option value="Azhan">All</option>
                        <option value="Azhan">Admin</option>
                        <option value="Azhan">Admin2</option>
                        <option value="Azhan">PunchOut</option>
                    </select>
                </div>
                <div class="md:ml-auto text-nowrap gap-2 flex">

                        <button wire:click="resetFilters"
                            class="bg-primary text-white px-4 py-2 rounded w-full md:w-fit">Search</button>
                        <button wire:click="resetFilters"
                            class="bg-destructive text-white px-4 py-2 rounded w-full md:w-fit">Reset</button>
                        <button wire:click="resetFilters" class="bg-green-600 text-white px-4 py-2 rounded w-full md:w-fit">Export To
                            Excel</button>
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
                                <th class="py-2 p-5 border w-full">User Name</th>
                                <th class="py-2 p-5 border">Role</th>
                                <th class="py-2 p-5 border">Email</th>
                                <th class="py-2 p-5 border">Mobile</th>
                                <th class="py-2 p-5 border">Staff ID</th>
                                <th class="py-2 p-5 border">Status</th>
                                <th class="py-2 p-5 border">
                                    <input type="checkbox" name="" id="">
                                </th>
                                <th class="py-2 p-5 border">Last Sent Activation</th>
                                <th class="py-2 p-5 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 p-5 border">1</td>
                                <td class="py-2 p-5 border">jessicadora.anthony@petronas.com.my</td>
                                <td class="py-2 p-5 border">PunchOut</td>
                                <td class="py-2 p-5 border">jessicadora.anthony@petronas.com.my</td>
                                <td class="py-2 p-5 border">000060345678901</td>
                                <td class="py-2 p-5 border">-</td>
                                <td class="py-2 p-5 border">
                                    <button class="bg-gray-500 text-white px-4 py-2 rounded">UNVERIFIED</button>
                                </td>
                                <td class="py-2 p-5 border">
                                    <input type="checkbox" name="" id="">
                                </td>
                                <td class="py-2 p-5 border"></td>
                                <td class="py-2 p-5 border">
                                    <button class="bg-primary text-white px-4 py-2 rounded">EDIT</button>
                                </td>
                            </tr>
                            <tr class="dark:bg-foreground/20">
                                <td class="py-2 p-5 border">2</td>
                                <td class="py-2 p-5 border">jessicadora.anthony@petronas.com.my</td>
                                <td class="py-2 p-5 border">PunchOut</td>
                                <td class="py-2 p-5 border">jessicadora.anthony@petronas.com.my</td>
                                <td class="py-2 p-5 border">000060345678901</td>
                                <td class="py-2 p-5 border">-</td>
                                <td class="py-2 p-5 border">
                                    <button class="bg-gray-500 text-white px-4 py-2 rounded">UNVERIFIED</button>
                                </td>
                                <td class="py-2 p-5 border">
                                    <input type="checkbox" name="" id="">
                                </td>
                                <td class="py-2 p-5 border"></td>
                                <td class="py-2 p-5 border">
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

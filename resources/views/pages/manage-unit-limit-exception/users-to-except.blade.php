<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <x-primary-button>
           ➕ ADD NEW USER EXCEPTION
        </x-primary-button>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF USERS TO EXCEPT UNIT LIMIT
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 gap-5 flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="User Name" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Email" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Staff ID" />
                </div>
                <div class="w-full md:w-1/3">
                    <select wire:model="recordedDate" class="block w-full rounded-md text-black uppercase">
                        <option value="" disabled selected>Role</option>
                        <option value="0">All</option>
                        <option value="1">Admin</option>
                        <option value="2">Admin2</option>
                        <option value="3">PunchOut</option>
                    </select>
                </div>
                <div class="md:ml-auto">
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
                                    <th class="py-2 p-5 border w-full">User Name</th>
                                    <th class="py-2 p-5 border">Role</th>
                                    <th class="py-2 p-5 border">Email</th>
                                    <th class="py-2 p-5 border">Mobile</th>
                                    <th class="py-2 p-5 border">Start Date</th>
                                    <th class="py-2 p-5 border">End Date</th>
                                    <th class="py-2 p-5 border">Status</th>
                                    <th class="py-2 p-5 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-foreground/20">
                                    <td class="py-2 p-5 border text-center text-red-400" colspan="9">
                                        No User Found
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

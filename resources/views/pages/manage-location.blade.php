<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Location') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <x-primary-button>
            Manage Charge Code
        </x-primary-button>
        <x-primary-button>
            Add Location
        </x-primary-button>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF LOCATION
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 flex-col md:flex-row gap-5">
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Brach Name" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="number" wire:model="userId" class="block w-full rounded-md text-black uppercase"
                        placeholder="Branch ID" />
                </div>
                <div class="w-full md:w-1/3">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Location type</option>
                        <option value="Azhan">Azhan</option>
                    </select>
                </div>
                <div class="md:ml-4">
                    <button wire:click="resetFilters"
                        class="bg-red-500 text-white px-4 py-2 rounded w-full md:w-fit">Reset</button>
                </div>
            </div>
            <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                <div class="flex flex-col md:flex-row gap-2 justify-between">
                    <div class="text-start font-light justify-start self-center">
                        <div class="text-sm">
                            Showing 1 to 1 of 1 entries
                        </div>
                    </div>
                </div>
                <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
                    <table class="w-full border rounded-md overflow-hidden p-1">
                        <thead>
                            <tr class="bg-primary">
                                <th class="py-2 p-5 border">Location Type</th>
                                <th class="py-2 p-5 border w-full">Branch name</th>
                                <th class="py-2 p-5 border">Branch ID</th>
                                <th class="py-2 p-5 border">Address</th>
                                <th class="py-2 p-5 border">Assign User</th>
                                <th class="py-2 p-5 border">Status</th>
                                <th class="py-2 p-5 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 p-5 border">HQ</td>
                                <td class="py-2 p-5 border">Petronas Berhad</td>
                                <td class="py-2 p-5 border">
                                    -
                                </td>
                                <td class="py-2 p-5 border">Petronas T, KLCC, Tower,
                                    Kuala Lumpur City Centre,
                                    Kuala Lumpur,
                                    Kuala Lumpur, Malaysia-50088</td>
                                <td class="py-2 p-5 border">2</td>
                                <td class="py-2 p-5 border">
                                    <button class="bg-primary text-white px-4 py-2 rounded">ENABLE</button>
                                </td>
                                <td class="py-2 p-5 border">
                                    <button class="bg-primary text-white px-4 py-2 rounded">EDIT</button>
                                    <button class="bg-primary text-white px-4 py-2 rounded">ASIGGN USER</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col md:flex-row gap-2 justify-between">
                    <div class="text-start font-light justify-start self-center">
                        <div class="text-sm">
                            Showing 1 to 1 of 1 entries
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

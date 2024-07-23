<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Cart ID') }}
        </h2>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF CART ID
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 gap-5 flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <input type="date" id="dob" wire:model="dob"
                    class="block w-full rounded-md text-black uppercase" placeholder="Date" />
                </div>
                <div class="w-full md:w-1/3 ">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Cart ID" />
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
                                    <th class="py-2 p-5 border w-full">Date & Time</th>
                                    <th class="py-2 p-5 border">Cart ID</th>
                                    <th class="py-2 p-5 border">Type</th>
                                    <th class="py-2 p-5 border">Status</th>
                                    <th class="py-2 p-5 border">Checkout Date</th>
                                    <th class="py-2 p-5 border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-foreground/20">
                                    <td class="py-2 p-5 border text-center text-red-400" colspan="7">
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

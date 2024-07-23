<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Orders') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <x-primary-button>
            GR APPROVAL (0)
        </x-primary-button>
    </x-slot>

    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="w-full overflow-auto flex border-b pb-5">
            LIST OF ORDERS
        </div>

        <div class="pt-5 flex-grow">
            <div class="flex mb-4 border-b pb-5 gap-5 flex-col md:flex-row">
                <div class="w-full md:w-1/3">
                    <input type="date" id="dob" wire:model="dob"
                        class="block w-full rounded-md text-black uppercase" placeholder="Date" />
                </div>
                <div class="w-full md:w-1/3 ">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Batch ID" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="PO ID" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Cust. Order No." />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Alternate Recipient Name/Email" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="Charge Code" />
                </div>
                <div class="w-full md:w-1/3">
                    <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase"
                        placeholder="CTracking No" />
                </div>
                <div class="w-full md:w-1/3">
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="inline-flex items-center px-4 py-2  border border-[#6b7280] text-nowrap rounded-md uppercase gap-2 w-full md:w-fit">
                            <div class="">
                                Sort By Status
                            </div>
                            <svg class="ml-auto h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul x-show="open" class="w-full bg-white dark:bg-zinc-900 divide-y text-sm absolute shadow-md rounded-md">
                            <div class="flex items-center p-4">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pending</label>
                            </div>
                            <div class="flex items-center p-4">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rejected</label>
                            </div>
                            <div class="flex items-center p-4">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Completed</label>
                            </div>
                            <div class="flex items-center p-4">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancelled</label>
                            </div>
                            <div class="flex items-center p-4">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pending Budget</label>
                            </div>
                            <div class="flex items-center p-4">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rejected Budget</label>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <button wire:click="resetFilters"
                        class="bg-red-500 text-white px-4 py-2 rounded h-full w-full md:w-fit">Reset</button>
                </div>
            </div>
            <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
                    <table class="w-full border rounded-md overflow-hidden p-1">
                        <thead>
                            <tr class="bg-primary">
                                <th class="py-2 p-5 border">Date & Time</th>
                                <th class="py-2 p-5 border w-full">Raised By</th>
                                <th class="py-2 p-5 border">Vendor</th>
                                <th class="py-2 p-5 border">Pre Order ID</th>
                                <th class="py-2 p-5 border">Batch ID</th>
                                <th class="py-2 p-5 border">PO ID</th>
                                <th class="py-2 p-5 border">Cust. Order No.</th>
                                <th class="py-2 p-5 border">Estimated Delivery</th>
                                <th class="py-2 p-5 border">Total</th>
                                <th class="py-2 p-5 border">GR Date</th>
                                <th class="py-2 p-5 border">Status</th>
                                <th class="py-2 p-5 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="py-2 p-5 border">05/07/2024 02:09 PM</td>
                                <td class="py-2 p-5 border">nithasha.revankar@gep.com</td>
                                <td class="py-2 p-5 border">Tenderin Sdn Bhd I</td>
                                <td class="py-2 p-5 border">PO24060441C6</td>
                                <td class="py-2 p-5 border">PO240705BF01CE1C2</td>
                                <td class="py-2 p-5 border">ORD240705255875810</td>
                                <td class="py-2 p-5 border">3400537124</td>
                                <td class="py-2 p-5 border">05/07/2024</td>
                                <td class="py-2 p-5 border">RM 490.00</td>
                                <td class="py-2 p-5 border">05/07/2024</td>
                                <td class="py-2 p-5 border">Delivered</td>
                                <td class="py-2 p-5 border">
                                    <button class="bg-primary text-white px-4 py-2 rounded">DETAILS</button>
                                    <button class="bg-primary text-white px-4 py-2 rounded">PO</button>
                                    <button class="bg-primary text-white px-4 py-2 rounded">INVOICE</button>
                                    <button class="bg-primary text-white px-4 py-2 rounded">DO</button>
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
                    <div class="font-light self-center">
                        <div class="flex justify-end text-white text-sm">
                            <button
                                class="px-[12px] py-[5px] bg-white text-orange-400 rounded-l-md border border-black">1</button>
                            <button
                                class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">2</button>
                            <button
                                class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">3</button>
                            <button
                                class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">4</button>
                            <button class="px-[12px] py-[5px] bg-primary border-t border-b border-black">></button>
                            <button
                                class="px-[12px] py-[5px] bg-primary text-white rounded-r-md border border-black">Last</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

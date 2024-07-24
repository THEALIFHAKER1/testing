<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Reports') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <div class="flex flex-col md:flex-row text-start gap-2 text-nowrap md:items-center">
            <label for="report-type" class="text-black">Report Type</label>
            <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                <option value="Azhan">My Account</option>
                <option value="Azhan">General Reports</option>
                <option value="Azhan">Other User's Acoount</option>
                <option value="Azhan">Branch</option>
            </select>
        </div>
        <div class="flex flex-col md:flex-row text-start gap-2 text-nowrap md:items-center">
            <label for="report-type" class="text-black">Report By</label>
            <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                <option value="Azhan">Order</option>
                <option value="Azhan">Status Order</option>
                <option value="Azhan">Category</option>
                <option value="Azhan">Sub-Category</option>
                <option value="Azhan">Vendor</option>
                <option value="Azhan">Location</option>
                <option value="Azhan">Top 10 Purchase Product</option>
            </select>
        </div>
    </x-slot>
    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="flex flex-col md:flex-row gap-5 justify-between items-center text-center align-middle pb-5 border-b">
            <div class="w-full overflow-auto flex text-3xl font-bold">
                SUPPLIER ANALYTICS
            </div>
            <div class="flex mb-4 gap-5 flex-col md:flex-row w-full md:w-fit">
                <x-primary-button>
                    Previous
                </x-primary-button>
                <x-primary-button>
                    Next
                </x-primary-button>
            </div>
        </div>

        <div class="pt-5 flex-grow gap-5 flex flex-col">
            <img src="{{ Vite::asset('resources/images/graph.png')}}" alt="" class="w-auto h-auto">
            <div>
                <div class="flex text-nowrap gap-2 overflow-auto">
                    <x-primary-button>
                        Export
                    </x-primary-button>
                    <x-primary-button>
                        Export All Delivered
                    </x-primary-button>
                    <x-primary-button>
                        Export All Delivered Line By Line
                    </x-primary-button>
                    <x-primary-button>
                        Export PO Action Log
                    </x-primary-button>
                    <x-primary-button>
                        Export Split Purchase
                    </x-primary-button>
                    <x-primary-button>
                        Export by Status
                    </x-primary-button>
                </div>
                <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                    <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
                        <table class="w-full border rounded-md overflow-hidden p-1">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="py-2 p-5 border">No.</th>
                                    <th class="py-2 p-5 border">Order Date</th>
                                    <th class="py-2 p-5 border">Batch ID</th>
                                    <th class="py-2 p-5 border">Order ID</th>
                                    <th class="py-2 p-5 border">PO ID</th>
                                    <th class="py-2 p-5 border">User Name</th>
                                    <th class="py-2 p-5 border">User Email</th>
                                    <th class="py-2 p-5 border">Location</th>
                                    <th class="py-2 p-5 border">Charge Code</th>
                                    <th class="py-2 p-5 border">Seller</th>
                                    <th class="py-2 p-5 border">Status</th>
                                    <th class="py-2 p-5 border">Order Value</th>
                                    <th class="py-2 p-5 border">Shipping Value</th>
                                    <th class="py-2 p-5 border">Tax Value</th>
                                    <th class="py-2 p-5 border">Total Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td class="py-2 p-5 border">1</td>
                                    <td class="py-2 p-5 border">T2020-04-21</td>
                                    <td class="py-2 p-5 border">
                                        PO5E98165CE8
                                    </td>
                                    <td class="py-2 p-5 border">
                                        ORD2004213054116
                                    </td>
                                    <td class="py-2 p-5 border">

                                    </td>
                                    <td class="py-2 p-5 border">
                                        hafiz@petronas.com.my
                                    </td>
                                    <td class="py-2 p-5 border">
                                        hafiz@petronas.com.my
                                    </td>
                                    <td class="py-2 p-5 border">
                                        NA
                                    </td>
                                    <td class="py-2 p-5 border">
                                        NA
                                    </td>
                                    <td class="py-2 p-5 border">
                                        AJRB GlOBAL
                                    </td>
                                    <td class="py-2 p-5 border">
                                        Accepted
                                    </td>
                                    <td class="py-2 p-5 border">
                                        RM 17.00
                                    </td>
                                    <td class="py-2 p-5 border">
                                        RM 0.00
                                    </td>
                                    <td class="py-2 p-5 border">
                                        RM 0.00
                                    </td>
                                    <td class="py-2 p-5 border">
                                        RM 17.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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

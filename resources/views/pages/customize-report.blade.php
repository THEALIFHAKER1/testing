<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Report (Customizable On-Demand Report)') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-full w-full">
        <div class="flex justify-between items-center text-center align-middle pb-5 border-b">
            <div class="w-full overflow-auto flex text-3xl font-bold">
                SUPPLIER ANALYTICS
            </div>
            <div class="flex justify-between gap-2">
                <div class="w-[300px]">
                    <select wire:model="selectedUser" class="block w-full rounded-md text-black">
                        <option value="" disabled selected>Report Type</option>
                        <option value="Azhan">Supplier Analytics</option>
                        <option value="Azhan">Category Analytics</option>
                    </select>
                </div>
                <x-primary-button>
                    VIEW
                </x-primary-button>
                <x-primary-button class="bg-green-500">
                    EXPORT
                </x-primary-button>
            </div>
        </div>

        <div class="pt-5 flex-grow gap-5 flex flex-col">
            <div class="bg-white dark:bg-foreground/20 p-5 rounded-md w-fit">
                <p>
                    Total Suppliers: 8
                </p>
                <p class="italic">
                    Data generated on 2020-08-26 15:30:53
                </p>
            </div>
            <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                <div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
                    <div class="overflow-auto w-full text-nowrap ">
                        <table class="w-full border rounded-md overflow-hidden p-1">
                            <thead>
                                <tr class="dark:bg-primary">
                                    <th class="py-2 p-5 border">No.</th>
                                    <th class="py-2 p-5 border w-full">Supplier</th>
                                    <th class="py-2 p-5 border">Number Of Order</th>
                                    <th class="py-2 p-5 border">Total Order Value (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="dark:bg-foreground/20">
                                    <td class="py-2 p-5 border">1</td>
                                    <td class="py-2 p-5 border">Tenderin Sdn Bhd I</td>
                                    <td class="py-2 p-5 border">
                                        8
                                    </td>
                                    <td class="py-2 p-5 border">
                                        3,706.10
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="py-2 p-5 border">2</td>
                                    <td class="py-2 p-5 border">Tenderin Sdn Bhd III</td>
                                    <td class="py-2 p-5 border">
                                        0
                                    </td>
                                    <td class="py-2 p-5 border">
                                        0.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

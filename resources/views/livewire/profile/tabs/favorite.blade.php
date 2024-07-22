<div class="flex mb-4 flex-col md:flex-row gap-5">
    <div class="w-full md:w-1/3">
        <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase" placeholder="Category Name"/>
    </div>
    <div class="w-full md:w-1/3">
        <input type="number" wire:model="userId" class="block w-full rounded-md text-black uppercase" placeholder="Category Code"/>
    </div>
    <div class="ml-auto flex gap-2 text-nowrap w-full md:w-fit">
        <button wire:click="resetFilters" class="bg-primary text-white px-4 py-2 rounded w-full md:w-fit">Search</button>
        <button wire:click="resetFilters" class="bg-destructive text-white px-4 py-2 rounded w-full md:w-fit">Reset</button>
        <button wire:click="resetFilters" class="bg-green-600 text-white px-4 py-2 rounded w-full md:w-fit">Export To Excel</button>
    </div>
</div>

<div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
    <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
        <table class="w-full border rounded-md overflow-hidden p-1">
            <thead>
            <tr class="bg-primary">
                <th class="py-2 p-5 border">No.</th>
                <th class="py-2 p-5 border w-full">Favorite Shipping Name</th>
                <th class="py-2 p-5 border">Location Address</th>
                <th class="py-2 p-5 border">Action</th>
            </tr>
            </thead>
            <tbody>
                <tr class="bg-foreground/20">
                    <td class="py-2 p-5 border text-center text-red-400" colspan="4">
                        No Favorite Shipping Found
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
            {{-- <div class="font-light self-center">
                <div class="flex justify-end text-white text-sm">
                    <button class="px-[12px] py-[5px] bg-white text-orange-400 rounded-l-md border border-black">1</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">2</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">3</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">4</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-b border-black">></button>
                    <button class="px-[12px] py-[5px] bg-primary text-white rounded-r-md border border-black">Last</button>
                </div>
            </div> --}}
        </div>
</div>

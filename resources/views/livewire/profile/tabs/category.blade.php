<div class="flex mb-4">
    <div class="w-1/3">
        <input type="text" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase" placeholder="Category Name"/>
    </div>
    <div class="w-1/3 mx-2">
        <input type="number" wire:model="userId" class="block w-full rounded-md text-black uppercase" placeholder="Category Code"/>
    </div>
    <div class="ml-auto flex gap-2">
        <button wire:click="resetFilters" class="bg-primary text-white px-4 py-2 rounded">Search</button>
        <button wire:click="resetFilters" class="bg-destructive text-white px-4 py-2 rounded">Reset</button>
        <button wire:click="resetFilters" class="bg-green-600 text-white px-4 py-2 rounded">Export To Excel</button>
    </div>
</div>

<div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-5 rounded-md">
    <div class="overflow-auto w-full text-nowrap ">
        <table class="w-full border rounded-md overflow-hidden p-1">
            <thead>
            <tr class="dark:bg-primary">
                <th class="py-2 p-5 border">No.</th>
                <th class="py-2 p-5 border w-full">Category Name</th>
                <th class="py-2 p-5 border">Category Code</th>
                <th class="py-2 p-5 border">Status</th>
                <th class="py-2 p-5 border">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="py-2 p-5 border">1</td>
                <td class="py-2 p-5 border">A4 Paper Wholesale</td>
                <td class="py-2 p-5 border">
                    <div class="grid place-items-center grid-flow-col gap-2">
                        <p>20000119</p> <button class="bg-primary text-white px-4 py-2 rounded">Edit</button>
                    </div>
                </td>
                <td class="py-2 p-5 border">Allowed</td>
                <td class="py-2 p-5 border">
                    <button class="bg-primary text-white px-4 py-2 rounded">BLOCK</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">SUB-CATEGORY</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">CODE SETTINGS</button>
                </td>
            </tr>
            <tr class="dark:bg-foreground/20">
                <td class="py-2 p-5 border">1</td>
                <td class="py-2 p-5 border">A4 Paper Wholesale</td>
                <td class="py-2 p-5 border">
                    <div class="grid place-items-center grid-flow-col gap-2">
                        <p>20000119</p> <button class="bg-primary text-white px-4 py-2 rounded">Edit</button>
                    </div>
                </td>
                <td class="py-2 p-5 border">Allowed</td>
                <td class="py-2 p-5 border">
                    <button class="bg-primary text-white px-4 py-2 rounded">BLOCK</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">SUB-CATEGORY</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">CODE SETTINGS</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 p-5 border">1</td>
                <td class="py-2 p-5 border">A4 Paper Wholesale</td>
                <td class="py-2 p-5 border">
                    <div class="grid place-items-center grid-flow-col gap-2">
                        <p>20000119</p> <button class="bg-primary text-white px-4 py-2 rounded">Edit</button>
                    </div>
                </td>
                <td class="py-2 p-5 border">Allowed</td>
                <td class="py-2 p-5 border">
                    <button class="bg-primary text-white px-4 py-2 rounded">BLOCK</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">SUB-CATEGORY</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">CODE SETTINGS</button>
                </td>
            </tr>
            <tr class="dark:bg-foreground/20">
                <td class="py-2 p-5 border">1</td>
                <td class="py-2 p-5 border">A4 Paper Wholesale</td>
                <td class="py-2 p-5 border">
                    <div class="grid place-items-center grid-flow-col gap-2">
                        <p>20000119</p> <button class="bg-primary text-white px-4 py-2 rounded">Edit</button>
                    </div>
                </td>
                <td class="py-2 p-5 border">Allowed</td>
                <td class="py-2 p-5 border">
                    <button class="bg-primary text-white px-4 py-2 rounded">BLOCK</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">SUB-CATEGORY</button>
                    <button class="bg-primary text-white px-4 py-2 rounded">CODE SETTINGS</button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
        <div class="grid grid-cols-2 gap-2">
            <div class="text-start font-light justify-start self-center">
                <div class="text-sm">
                    Showing 1 to 15 of 693 entries
                </div>
            </div>
            <div class="font-light self-center">
                <div class="flex justify-end text-white text-sm">
                    <button class="px-[12px] py-[5px] bg-white text-orange-400 rounded-l-md border border-black">1</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">2</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">3</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-r border-b border-black">4</button>
                    <button class="px-[12px] py-[5px] bg-primary border-t border-b border-black">></button>
                    <button class="px-[12px] py-[5px] bg-primary text-white rounded-r-md border border-black">Last</button>
                </div>
            </div>
        </div>
</div>
<div class="mt-4">
    {{-- {{ $logs->links() }} --}}
</div>

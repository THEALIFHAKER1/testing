<div class="flex mb-4 flex-col md:flex-row gap-5">
    <div class="md:w-1/3">
        <input type="date" wire:model="recordedDate" class="block w-full rounded-md text-black uppercase" placeholder="Recorded Date"/>
    </div>
    <div class="md:w-1/3">
        <input type="number" wire:model="userId" class="block w-full rounded-md text-black uppercase" placeholder="User ID"/>
    </div>
    <div class="md:w-1/3">
        <select wire:model="selectedUser" class="block w-full rounded-md text-black">
            <option value="">Select User</option>
            <option value="Azhan">Azhan</option>
        </select>
    </div>
    <div>
        <button wire:click="resetFilters" class="bg-red-500 text-white px-4 py-2 rounded w-full md:w-fit">Reset</button>
    </div>
</div>

<div class="bg-white dark:bg-foreground/20 p-5 flex flex-col gap-2 rounded-md">
    <div class="overflow-auto w-full text-nowrap border-2 rounded-md">
        <table class="w-full border rounded-md overflow-hidden p-1">
            <thead>
            <tr class="bg-primary">
                <th class="py-2 p-5 border">LogID</th>
                <th class="py-2 p-5 border">Recorded Date</th>
                <th class="py-2 p-5 border">User ID</th>
                <th class="py-2 p-5 border">User Name</th>
                <th class="py-2 p-5 border">User Type</th>
                <th class="py-2 p-5 border">Action Name</th>
                <th class="py-2 p-5 border">Module Name</th>
                <th class="py-2 p-5 border">Page URL</th>
                <th class="py-2 p-5 border">IP Address</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="py-2 p-5 border">342505</td>
                <td class="py-2 p-5 border">18/07/2024 5:40PM</td>
                <td class="py-2 p-5 border">1699</td>
                <td class="py-2 p-5 border">Azhan</td>
                <td class="py-2 p-5 border">Buyers</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">https://app-uat.lapasar.com/app/buyers/u...</td>
                <td class="py-2 p-5 border">180.74.69.14</td>
            </tr>
            <tr class="bg-foreground/20">
                <td class="py-2 p-5 border">342505</td>
                <td class="py-2 p-5 border">18/07/2024 5:40PM</td>
                <td class="py-2 p-5 border">1699</td>
                <td class="py-2 p-5 border">Azhan</td>
                <td class="py-2 p-5 border">Buyers</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">https://app-uat.lapasar.com/app/buyers/u...</td>
                <td class="py-2 p-5 border">180.74.69.14</td>
            </tr>
            <tr>
                <td class="py-2 p-5 border">342505</td>
                <td class="py-2 p-5 border">18/07/2024 5:40PM</td>
                <td class="py-2 p-5 border">1699</td>
                <td class="py-2 p-5 border">Azhan</td>
                <td class="py-2 p-5 border">Buyers</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">https://app-uat.lapasar.com/app/buyers/u...</td>
                <td class="py-2 p-5 border">180.74.69.14</td>
            </tr>
            <tr class="bg-foreground/20">
                <td class="py-2 p-5 border">342505</td>
                <td class="py-2 p-5 border">18/07/2024 5:40PM</td>
                <td class="py-2 p-5 border">1699</td>
                <td class="py-2 p-5 border">Azhan</td>
                <td class="py-2 p-5 border">Buyers</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">List Of Profile</td>
                <td class="py-2 p-5 border">https://app-uat.lapasar.com/app/buyers/u...</td>
                <td class="py-2 p-5 border">180.74.69.14</td>
            </tr>
            </tbody>
        </table>

    </div>
        <div class="flex flex-col md:flex-row gap-2 justify-between">
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

<x-app-layout>
    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 md:grid-cols-2">
        <div class="bg-primary text-white flex rounded-md shadow-md">
            <div class="bg-black/20 flex items-center justify-center p-5 aspect-square">
                <span class="text-white text-2xl">👤</span>
            </div>
            <div class="w-full flex flex-col justify-center pl-5">
                <h3>Total Users</h3>
                <p class="text-2xl font-bold">217</p>
            </div>
        </div>
        <div class="bg-primary text-white flex rounded-md shadow-md">
            <div class="bg-black/20 flex items-center justify-center p-5 aspect-square">
                <span class="text-white text-2xl">🔁</span>
            </div>
            <div class="w-full flex flex-col justify-center pl-5">
            <h3>Total Workflows</h3>
            <p class="text-2xl font-bold">0</p>
        </div>
        </div>
        <div class="bg-primary text-white flex rounded-md shadow-md">
            <div class="bg-black/20 flex items-center justify-center p-5 aspect-square">
                <span class="text-white text-2xl">📋</span>
            </div>
            <div class="w-full flex flex-col justify-center pl-5">
            <h3>Total Orders</h3>
            <p class="text-2xl font-bold">323</p>
        </div>
        </div>
        <div class="bg-primary text-white flex rounded-md shadow-md">
            <div class="bg-black/20 flex items-center justify-center p-5 aspect-square">
                <span class="text-white text-2xl">👥</span>
            </div>
            <div class="w-full flex flex-col justify-center pl-5">
            <h3>Total Vendors</h3>
            <p class="text-2xl font-bold">10</p>
        </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white dark:bg-foreground/20 shadow-md rounded-md overflow-hidden">
            <div class="bg-red-600 text-white p-5 font-semibold">
                Order Management
            </div>
            <div class="flex flex-col gap-2 px-5 py-16">
                <div class="flex justify-between">
                    <p>Total Order Placed</p>
                    <p class="text-xs"><span class="font-bold text-base">323</span> TICKETS</p>
                </div>
                <div class="flex justify-between">
                    <p>Pending</p>
                    <p class="text-xs"><span class="font-bold text-base">181</span> TICKETS</p>
                </div>
                <div class="flex justify-between">
                    <p>Accepted</p>
                    <p class="text-xs"><span class="font-bold text-base">0</span> TICKETS</p>
                </div>
                <div class="flex justify-between">
                    <p>Delivered</p>
                    <p class="text-xs"><span class="font-bold text-base">142</span> TICKETS</p>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-foreground/20 shadow-md rounded-md overflow-hidden">
            <div class="bg-red-600 text-white p-5 font-semibold">
                Pre-Order
            </div>
            <div class="flex flex-col gap-2 px-5 py-16">
                <div class="flex justify-between">
                    <p>Total Pre-Order</p>
                    <p class="text-xs"><span class="font-bold text-base">264</span> TICKETS</p>
                </div>
                <div class="flex justify-between">
                    <p>Pending</p>
                    <p class="text-xs"><span class="font-bold text-base">159</span> TICKETS</p>
                </div>
                <div class="flex justify-between">
                    <p>Approved</p>
                    <p class="text-xs"><span class="font-bold text-base">104</span> TICKETS</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

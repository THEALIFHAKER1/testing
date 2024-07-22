<form wire:submit.prevent="submit" enctype="multipart/form-data" class="flex flex-col h-full">
    <div class="mb-4 flex flex-col  md:flex-row gap-2 md:gap-5 md:items-center  ">
        <label for="name" class="block font-semibold md:w-16 w-full">Existing Password</label>
        <input type="text" id="name" wire:model="name" class="block w-full rounded-md disabled:bg-gray-100" />
    </div>

    <div class="mb-4 flex flex-col  md:flex-row gap-2 md:gap-5 md:items-center ">
        <label for="email" class="block font-semibold md:w-16 w-full">New Password</label>
        <input type="email" id="email" wire:model="email" class="block w-full rounded-md disabled:bg-gray-100"  />
    </div>

    <div class="mb-4 flex flex-col  md:flex-row gap-2 md:gap-5 md:items-center ">
        <label for="phone" class="block font-semibold md:w-16 w-full">New Password (Confirm)</label>
        <input type="text" id="phone" wire:model="phone" class="block w-full rounded-md disabled:bg-gray-100" />
    </div>

    <div class="mt-auto py-5">
        <x-primary-button type="submit" class="bg-primary text-white px-4 py-2 rounded">Save</x-primary-button>
    </div>
</form>

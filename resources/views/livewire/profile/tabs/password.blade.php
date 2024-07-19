<form wire:submit.prevent="submit" enctype="multipart/form-data" class="flex flex-col h-full">
    <div class="mb-4 flex gap-5 items-center ">
        <label for="name" class="block font-semibold w-16">Existing Password</label>
        <input type="text" id="name" wire:model="name" class="block w-full rounded-md disabled:bg-gray-100" />
    </div>

    <div class="mb-4 flex gap-5 items-center">
        <label for="email" class="block font-semibold w-16">New Password</label>
        <input type="email" id="email" wire:model="email" class="block w-full rounded-md disabled:bg-gray-100"  />
    </div>

    <div class="mb-4 flex gap-5 items-center">
        <label for="phone" class="block font-semibold w-16">New Password (Confirm)</label>
        <input type="text" id="phone" wire:model="phone" class="block w-full rounded-md disabled:bg-gray-100" />
    </div>

    <div class="mt-auto">
        <x-primary-button type="submit" class="bg-primary text-white px-4 py-2 rounded">Save</x-primary-button>
    </div>
</form>

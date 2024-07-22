<?php

use Livewire\Volt\Component;

new class extends Component
{
//    use WithFileUploads;

    public $name, $email, $phone, $address, $city, $state, $zip, $country, $dob, $gender, $staffId, $photo;
    public $existingPassword, $newPassword, $confirmPassword;

    public function submit()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'country' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'staffId' => 'nullable|string',
            'photo' => 'nullable|image|max:1024', // 1MB Max
            'existingPassword' => 'nullable|string',
            'newPassword' => 'nullable|string|confirmed',
        ]);

        // Handle form submission, e.g., save to database
    }
};
?>

    <form wire:submit.prevent="submit" enctype="multipart/form-data" class="flex flex-col h-full">
        <div class="mb-4 flex gap-5 items-center ">
            <label for="name" class="block font-semibold w-16">Name</label>
            <input type="text" id="name" wire:model="name" class="block w-full rounded-md text-black disabled:bg-gray-100" disabled
                value="{{ auth()->user()->name }}"
            />
        </div>

        <div class="mb-4 flex gap-5 items-center">
            <label for="email" class="block font-semibold w-16">Email</label>
            <input type="email" id="email" wire:model="email" class="block w-full rounded-md text-black disabled:bg-gray-100" disabled
                value="{{ auth()->user()->email }}"
            />
        </div>

        <div class="mb-4 flex gap-5 items-center">
            <label for="phone" class="block font-semibold w-16">Phone</label>
            <input type="text" id="phone" wire:model="phone" class="block w-full rounded-md text-black disabled:bg-gray-100"
                value="+60(3)20515000"
            />
        </div>

        <div class="mb-4 flex gap-5 items-start ">
            <label for="address" class="block font-semibold w-16 ">Address</label>
            <div>
                <input type="text" id="address" wire:model="address" class="block w-full rounded-md text-black disabled:bg-gray-100" value="Menara 1, Menara Kembar Petronas"/>
                <div class="my-2 grid grid-flow-col gap-5">
                    <div>
                        <label for="city" class="block font-semibold">City</label>
                        <input type="text" id="city" wire:model="city" class="block w-full rounded-md text-black disabled:bg-gray-100" value="Kuala Lumpur"/>
                    </div>
                    <div >
                        <label for="state" class="block font-semibold">State</label>
                        <input type="text" id="state" wire:model="state" class="block w-full rounded-md text-black disabled:bg-gray-100" value="Pusat Bandaraya Kuala Lumpur"/>
                    </div>
                    <div>
                        <label for="zip" class="block font-semibold">Zip</label>
                        <input type="text" id="zip" wire:model="zip" class="block w-full rounded-md text-black disabled:bg-gray-100" value="50088"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 flex gap-5 items-center">
            <label for="dob" class="block font-semibold w-16">Date of Birth</label>
            <input type="date" id="dob" wire:model="dob" class="block w-full rounded-md disabled:bg-gray-100" />
        </div>

        <div class="mb-4 flex gap-5 items-center">
            <label class="block font-semibold w-16">Gender</label>
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" wire:model="gender" value="Male" class="form-radio" />
                    <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" wire:model="gender" value="Female" class="form-radio" />
                    <span class="ml-2">Female</span>
                </label>
            </div>
        </div>

        <div class="mb-4 flex gap-5 items-center">
            <label for="staffId" class="block font-semibold w-16">Staff ID</label>
            <input type="text" id="staffId" wire:model="staffId" class="block w-full rounded-md disabled:bg-gray-100" />
        </div>

        <div class="mb-4 flex gap-5 items-center">
            <label for="photo" class="block font-semibold w-16">Upload Photo</label>
            <div>
                <input type="file" name="attachment" class="block w-full text-sm  file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-white-700 hover:file:bg-orange-100">
                <h2 class="mt-2 text-xs">Size Limit: 5MB | Allowed Format: .pdf, .jpg, .jpeg, .png</h2>
            </div>
        </div>


        <div class="mt-auto py-5">
            <x-primary-button type="submit" class="bg-primary text-white px-4 py-2 rounded">Save</x-primary-button>
        </div>
    </form>

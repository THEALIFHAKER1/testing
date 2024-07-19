
<x-app-layout>
    <div class="flex md:flex-row flex-col gap-5 flex-grow">
        <div class="flex flex-col gap-5 w-72">
            <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow sm:rounded-lg  gap-5 flex flex-col">
                <div class="grid place-items-center">
                    <div class=" rounded-full border-primary border-2">
                    <img class="h-24 aspect-square rounded-full" src="https://app-uat.lapasar.com/app/buyers/uploads/user/16995988830.JPG" alt="">
                    </div>
                </div>

                <div class="text-center">
                    <div class="font-bold" >{{ auth()->user()->name }}</div>
                    <div>{{ auth()->user()->email }}</div>
                    <div class="text-primary font-semibold">+60(3)20515000</div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow sm:rounded-lg divide-y">
                <div class="pb-5">
                    ABOUT ME
                </div>
                <div class="py-5">
                    <p class="font-semibold pb-2">
                       📰 Company
                    </p>
                    <p class="text-gray-400 text-xs">
                        PETROLIAM NASIONAL BERHAD
                    </p>
                </div>
                <div class="py-5">
                    <p class="font-semibold pb-2">🧭 Location</p>
                    <p class="text-gray-400 text-xs">
                        Menara 1, Menara Berkembar Petronas, Pusat Bandaraya Kuala Lumpur, Kuala Lumpur, Kuala Lumpur, Malaysia, 50088.
                    </p>
                </div>
                <div class="py-5">
                    <p class="font-semibold pb-2">ℹ️ Description</p>
                    <div class="text-xs text-gray-400 flex gap-2 flex-col">
                        <div class="flex justify-between">
                            <p>Gender:</p>
                            <p>Male</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Staff ID:</p>
                            <p>102</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Date of Birth:</p>
                            <p>01/10/2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow sm:rounded-lg overflow-auto w-full">
            <livewire:profile.profile-tabs-component />
        </div>
    </div>
</x-app-layout>

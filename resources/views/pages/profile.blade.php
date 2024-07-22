
<x-app-layout>
    <div class="flex md:flex-row flex-col gap-5 h-full">
        <div class="flex flex-row md:flex-col gap-5 w-full md:w-72 h-1/2 md:h-full overflow-auto">
            <div class="w-1/2 md:w-full p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg  gap-5 flex flex-col justify-center">
                <div class="grid place-items-center">
                    <div class=" rounded-full border-primary border-2">
                    <img class="h-24 aspect-square rounded-full" src="https://app-uat.lapasar.com/app/buyers/uploads/user/16995988830.JPG" alt="">
                    </div>
                </div>

                <div class="text-center">
                    <div class="font-bold" >{{ auth()->user()->name }}</div>
                    <div class="text-xs md:text-sm xl:text-base">{{ auth()->user()->email }}</div>
                    <div class="text-xs md:text-sm xl:text-base text-primary font-semibold">+60(3)20515000</div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg divide-y overflow-auto">
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

        <div class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg h-full overflow-auto w-full">
            <livewire:profile.profile-tabs-component />
        </div>
    </div>
</x-app-layout>

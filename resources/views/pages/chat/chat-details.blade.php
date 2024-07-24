<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Manage Chats') }}
        </h2>
    </x-slot>
    <x-slot name="action">
        <a href="/chat">
            <button class="bg-primary text-white px-4 py-2 rounded">Back</button>
        </a>
    </x-slot>

    <div
        class="p-4 sm:p-8 bg-white dark:bg-foreground/20 shadow rounded-lg overflow-auto h-[1000px] md:h-1/2 w-full gap-5 flex flex-col">
        <div class="w-full overflow-auto flex border-b pb-5">
            CHATS
        </div>
        <form class="flex flex-col gap-5">
            <div>
                <div class="w-full flex text-xl text-gray-600 border-t border-x border-black bg-background overflow-auto">
                    <select wire:model="selectedUser" class="block text-black border-none">
                        <option>Paragraph</option>
                        <option class="text-3xl font-bold">Heading 1</option>
                        <option class="text-2xl font-bold">Heading 2</option>
                        <option class="text-xl font-bold">Heading 3</option>
                    </select>
                    <button
                        class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('bold')">
                        <i class="mdi mdi-format-bold"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('italic')">
                        <i class="mdi mdi-format-italic"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('underline')">
                        <i class="mdi mdi-format-underline"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('formatBlock','P')">
                        <i class="mdi mdi-format-paragraph"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('insertUnorderedList')">
                        <i class="mdi mdi-format-list-bulleted"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('insertOrderedList')">
                        <i class="mdi mdi-format-list-numbered"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('justifyLeft')">
                        <i class="mdi mdi-format-align-left"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('justifyCenter')">
                        <i class="mdi mdi-format-align-center"></i>
                    </button>
                    <button
                        class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                        @click="format('justifyRight')">
                        <i class="mdi mdi-format-align-right"></i>
                    </button>
                </div>
                <input type="text" class="w-full">
            </div>
            <div class="flex gap-2">
                <button class="bg-primary text-white px-4 py-2 rounded">Send</button>
                <button class="bg-destructive text-white px-4 py-2 rounded">Clear</button>
            </div>
        </form>
    </div>

    <div class="flex flex-col flex-grow space-y-4 p-4 bg-gray-100 overflow-auto">
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 21:02:36</p>
                    <p class="mt-1">asdqweqwe</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 20:56:30</p>
                    <p class="mt-1">test parent</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 11:47:28</p>
                    <p class="mt-1">yeah we can do that. When you need it?</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Me 2024-06-26 11:45:49</p>
                    <p class="mt-1">I need 1000 units of logitech mouse. Can you supply it to KLCC?</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4 ml-8">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 20:56:22</p>
                    <p class="mt-1">test child</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 11:45:14</p>
                    <p class="mt-1 text-blue-600">Logitech Wireless Mouse M185 Grey(siva test)</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 21:02:36</p>
                    <p class="mt-1">asdqweqwe</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 20:56:30</p>
                    <p class="mt-1">test parent</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 11:47:28</p>
                    <p class="mt-1">yeah we can do that. When you need it?</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Me 2024-06-26 11:45:49</p>
                    <p class="mt-1">I need 1000 units of logitech mouse. Can you supply it to KLCC?</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4 ml-8">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 20:56:22</p>
                    <p class="mt-1">test child</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                </div>
                <div class="ml-3 flex-grow">
                    <p class="text-sm text-gray-600">Vendor 2024-06-26 11:45:14</p>
                    <p class="mt-1 text-blue-600">Logitech Wireless Mouse M185 Grey(siva test)</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

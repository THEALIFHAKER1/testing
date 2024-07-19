<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public $tabs = [
        [
            'name' => 'Profile Settings',
            'key' => 'profile',

        ],
        [
            'name' => 'Change Password',
            'key' => 'password',
        ],
        [
            'name' => 'View Audit Logs',
            'key' => 'audit',
        ],
        [
            'name' => 'Category Settings',
            'key' => 'category',
        ],
        [
            'name' => 'Favorite Shipping',
            'key' => 'favorite',
        ]
    ];

    public $activeTab = 'profile'; // Default active tab

    public function setActiveTab($tabKey)
    {
        $this->activeTab = $tabKey;
    }
};
?>



<div class="flex flex-col h-full">
    <div class="w-full overflow-auto flex border-b">
        @foreach($tabs as $tab)
            <button wire:click="setActiveTab('{{ $tab['key'] }}')" class="px-4 py-2 text-nowrap {{ $activeTab === $tab['key'] ? 'border-b border-blue-400' : '' }}">
                {{ $tab['name'] }}
            </button>
        @endforeach
    </div>

    <div class="pt-5 flex-grow">
        @foreach($tabs as $tab)
            <div class="h-full" wire:key="{{ $tab['key'] }}" x-show="$wire.activeTab === '{{ $tab['key'] }}'" x-cloak>
                @include('livewire.profile.tabs.' . $tab['key'])
            </div>
        @endforeach
    </div>
</div>




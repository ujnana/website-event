<x-modal>
    <x-slot name="title">
        Add User
    </x-slot>

    <x-slot name="content">
        <form wire:submit="save" id="createUser" class="space-y-3 md:space-y-3">
            <x-input-text wire:model.live="name" name="name" id="name" label="Name" placeholder="Input Name"/>
            <x-input-email wire:model.live="email" name="email" id="email" label="Email" placeholder="Input Email"/>
            <x-input-select-role wire:model.live="role" name="role" id="role" label="Role" :options="$roles"
                                 :selected="$role" placeholder="Select Role"/>
            <x-input-password wire:model.live="password" name="password" id="password" label="Password"
                              placeholder="Password"/>
            <x-input-confirm-password wire:model.live="confirm_password" name="confirm-password" id="confirm-password"
                                      label="Confirm Password" placeholder="Confirm Password"/>
        </form>
    </x-slot>

    <x-slot name="buttons">
        <button type="submit" form="createUser"
                class="px-3 py-2 text-sm font-medium mr-2 text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <x-iconoir-floppy-disk class="w-4 h-4 mr-2"/>
            {{ __('Save') }}
        </button>
        <button onclick="Livewire.dispatch('closeModal')"
                class="px-3 py-2 text-sm font-medium text-center inline-flex items-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            <x-heroicon-s-x-mark class="w-4 h-4 mr-2"/>
            {{ __('Cancel') }}
        </button>
    </x-slot>

</x-modal>

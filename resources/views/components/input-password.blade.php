@props(
    [
        'label' => '',
        'placeholder' => '',
        'value' => '',
        'name' => '',
        'id' => 'password',
    ]
)

<div {{ $attributes }}>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="password" name="{{ $name }}" value="{{ $value }}" id="{{ $id }}" placeholder="{{ $placeholder }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error($name)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
    @enderror
</div>

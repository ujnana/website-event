@props(
    [
        'label' => '',
        'placeholder' => '',
        'value' => '',
        'id' => '',
        'name' => '',
        'required' => false
    ]
)

<div {{ $attributes }}>
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
    </label>
    <input type="text" name="{{ $name }}" value="{{ $value }}" id="{{ $id }}"
           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
           placeholder="{{ $placeholder }}" required="{{ $required }}">
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
    @enderror
</div>

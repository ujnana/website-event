@props([
    'options' => [],
    'selected' => null,
    'label' => null,
    'name' => '',
    'id' => '',
    'required' => false,
    'placeholder' => '',
])

<div>
    <label for="{{ $id }}" {{ $attributes->class(['block mb-2 text-sm font-medium text-gray-900 dark:text-white']) }}>
        {{ $label ?? 'Select an option' }}
    </label>
    <select id="{{ $id }}" name="{{ $name }}" required="{{ $required }}"
        {{ $attributes->class(['bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) }}>
        @if($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        @foreach($options as $key => $value)
            <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
    @error($name)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
    @enderror
</div>

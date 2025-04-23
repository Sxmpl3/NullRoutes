@props([
    'label' => '',
    'type' => 'text',
    'name',
    'value' => '',
    'required' => false,
    'errors' => null,
])

<div class="space-y-1">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-300">
            {{ $label }}
            @if($required) <span class="text-red-500">*</span> @endif
        </label>
    @endif
    
    <input 
        id="{{ $name }}" 
        name="{{ $name }}" 
        type="{{ $type }}" 
        value="{{ old($name, $value) }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'w-full px-3 py-2 bg-dark-700 border border-black-600 rounded-md shadow-sm focus:outline-none focus:ring-black-500 focus:border-black text-black-100']) }}        
        >

</div>
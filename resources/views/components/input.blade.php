<div class="mb-3 pt-0">
    <label class="block" for="{{ $id }}">
        <span class="text-gray-700">{{ $label }}</span>
        <input type="{{ $type }}" name="{{ $name }}" class="form-input mt-1 block w-full"
               id="{{ $id }}" value="{{ $value }}" placeholder="{{ $placeholder }}"
            {{ $disabled ? 'disabled' : '' }}
            {{ $readonly ? 'readonly' : '' }}
        >
        @error($name) <span class="p-2 font-bold text-red-500">{{ $errors->first($name) }}</span> @enderror
        @if($hint) <small class="p-2 text-xs text-gray-500">{{ $hint }}</small> @endif
    </label>
</div>


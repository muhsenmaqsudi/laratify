<div class="flex flex-col">
    @if($label)
        <label class="inline-flex my-2">{{ $label }}</label>
    @endif
    <label class="inline-flex items-center">
        <input type="hidden" name="{{ $name }}" value="0">
        <input type="checkbox"
               class="form-checkbox"
               name="{{ $name }}"
               id="{{ $id }}"
               value="1"
                {{ $value ? 'checked' : '' }}
                {{ $disabled ? 'disabled' : '' }}
        >
        <span class="ml-2">{{ $checkboxLabel }}</span>
    </label>
</div>

<div class="block">
    <span class="text-gray-700">{{ $label }}</span>
    <div class="mt-2">
        <div>
            @foreach($options as $option_value => $option_label)
                <label class="inline-flex items-center">
                    <input type="radio"
                           class="form-radio"
                           name="{{ $name }}"
                           value="{{ $option_value }}"
                           checked
                            {{ $option_value == $value ? 'checked' : '' }}
                            {{ $disabled ? 'disabled' : '' }}
                    >
                    <span class="ml-2">{{ $option_label }}</span>
                </label>
            @endforeach
        </div>
    </div>
</div>
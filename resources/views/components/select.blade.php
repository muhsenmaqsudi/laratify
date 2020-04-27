<div class="w-64">
    <label class="flex flex-col">
        @if($label)
            <span class="inline-flex my-2 pl-2 text-gray-700">{{ $label }}</span>
        @endif
        <select class="form-select block w-full mt-1"
                name="{{ $name }}"
                id="{{ $id }}"
            {{ $disabled ? 'disabled' : '' }}
        >
            @if($firstOption)
                <option value="">{{ $firstOption }}</option>
            @endif
            @foreach($options as $option_value => $option_label)
                <option value="{{ $option_value }}"
                    {{ $option_value == $value ? 'selected' : '' }}>
                    {{ $option_label }}
                </option>
            @endforeach
        </select>
    </label>
</div>

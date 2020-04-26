<div>
    <label class="block">
        <span class="text-gray-700">{{ $label }}</span>
        <select class="form-select block w-full mt-1"
                name="{{ $name }}"
                id="{{ $id }}"
                {{ $disabled ? 'disabled' : '' }}
        >
            @if($first)
                <option value="">{{ $first }}</option>
            @endif
            @foreach($options as $option_value => $option_label)
                <option value="{{ $option_value }}" {{ $option_value == $value ? 'selected' : '' }}>{{ $option_label }}</option>
            @endforeach
        </select>
    </label>
</div>

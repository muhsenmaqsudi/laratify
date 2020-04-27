<label class="block">
    <span class="float-left m-2 text-gray-700">{{ $label }}</span>
    <textarea class="form-textarea mt-1 block w-full whitespace-pre-line"
              name="{{ $name }}"
              id="{{ $id }}"
              rows="{{ $rows }}"
              placeholder="{{ $placeholder }}"
    >{{ $value }}</textarea>
</label>

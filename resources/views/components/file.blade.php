<div class="group p-2" x-data="filename()">
    <label class="w-64 flex flex-col items-center p-4 bg-white text-black rounded-lg shadow-lg tracking-wide cursor-pointer hover:{{ $variant }} group-hover:text-white">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
        </svg>
        <span class="mt-1 text-sm leading-normal">{{ $label }}</span>
        <input type="file" class="hidden" name="{{ $name }}" id="{{ $id }}" x-ref="selectedFile" @change="getFilename()"/>
        <span class="text-gray-700 pt-1 text-xs group-hover:text-white" id="filename" x-text="filename"></span>
    </label>
</div>

<script>
    function filename() {
        return {
            filename: null,
            getFilename() {
                this.filename = this.$refs.selectedFile.files[0].name;
            }
        }
    }
</script>

<script>
    Tippy.default('{{ $appendTo }}', {
        content: '{{ $content }}',
        duration: 500,
        @unless($noArrow)
                {{ 'arrow: true,' }}
                @else
                {{ 'arrow: false,' }}
                @endunless
        trigger: '{{ $trigger }}',
        animation: 'fade',
        placement: '{{ $placement }}'
    });
</script>

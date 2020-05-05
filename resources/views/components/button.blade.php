<button class="{{ $mainClasses }}"
        type="button"
        @foreach($events as $eventModifier => $eventHandler)
            {{ "@{$eventModifier}={$eventHandler}" }}
        @endforeach
>{{ $slot }}</button>
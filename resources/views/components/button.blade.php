<button class="{{ $mainClasses }}"
        id="{{ $id }}"
        type="button"
        @foreach($events as $eventModifier => $eventHandler)
            @if(strpos($eventModifier, 'on') !== false)
                {{ "{$eventModifier}={$eventHandler}" }}
            @else
                {{ "@{$eventModifier}={$eventHandler}" }}
            @endif
        @endforeach
>{{ $slot }}</button>
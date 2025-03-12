@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => '']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

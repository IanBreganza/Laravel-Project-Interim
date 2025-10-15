@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}

    <a {{ $attributes->merge(['class' => 'btn']) }}>
        Read Now
    </a>
</div>

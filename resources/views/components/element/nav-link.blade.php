@props([
    'href' => '#',
    'active' => false,
])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "
            inline-block
            px-5 py-1.5
            text-sm leading-normal
            rounded
            transition-colors duration-200
            text-[#1b1b18] dark:text-[#EDEDEC]
            hover:bg-gray-100 dark:hover:bg-gray-800
            " . ($active ? 'font-semibold underline' : '')
    ]) }}
>
    {{ $slot }}
</a>

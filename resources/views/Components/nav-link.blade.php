{{-- Day 5 --}}
{{-- blade directives --}}
@props([
    // 'active' props that has a default value of false.
    'active' => false,
])

<a class="rounded-md  px-3 py-2 text-sm font-medium
        {{-- check the current route if '/' --}}
        {{ $active
            ? // if true turn to active btn
            'bg-gray-900 text-white'
            : // if false turn to normal btn
            'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
            
    {{-- check if the current link or url is the current page --}} 
    aria-current="{{ $active ? 'page' : 'false' }}" 

    {{-- spread the attributes that uses nav-link component --}} 
    {{ $attributes }}>

    {{-- children --}}
    {{ $slot }}
</a>

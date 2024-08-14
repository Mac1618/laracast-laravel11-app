<x-layout>
    {{-- named slot for props --}}
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    {{-- content --}}
    <ul class="">
        {{-- Loop the array of jobs using 'blade directives' --}}
        @foreach ($jobs as $job)
            <li class="hover:underline">
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>

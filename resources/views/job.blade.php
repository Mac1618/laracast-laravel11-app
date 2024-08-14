<x-layout>
    {{-- named slot for props --}}
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="text-lg font-bold mb-4">
        {{ $job['title'] }}
    </h2>

    <p>
        This jobs pays {{ $job['salary'] }} per year.
    </p>
</x-layout>

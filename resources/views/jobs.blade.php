<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}"class="block px-4 border border-gray-200 rounded-lg">
                <div>{{ $job->employer->name }}</div>
                <div>
                    <a>{{ $job['title'] }} Pays {{ $job['salary'] }}</a>
                </div>
            </a>
        @endforeach
        <div>{{ $jobs->links() }}</div>
    </div>
</x-layout>

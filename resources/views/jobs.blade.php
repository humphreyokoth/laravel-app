<x-layout>
    <x-slot:heading>
       Job Listings
    </x-slot:heading>
    <h1>Hello About page</h1>
    @foreach ($jobs as $job)
    <a href="/jobs/{{$job['id']}}">
    <li>{{$job['title']}} Pays {{$job['salary']}}</li>
</a>
@endforeach
</x-layout>

{{-- <x-layout>
    <x-slot:heading>
       Job 
    </x-slot:heading>
    <h1>Hello About page</h1>
    {{-- @foreach ($jobs as $job) --}}
    {{-- <li>{{$job['title']}} Pays {{$job['salary']}}</li> --}}
{{--     
@endforeach --}}
{{-- </x-layout> --}} 

<x-layout>
    <x-slot:heading>
       Job 
    </x-slot:heading>
    <h2>{{$job->title}}</h2>

    <p>This job pays {{$job->salary}}</p>
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>

    </p>
</x-layout>

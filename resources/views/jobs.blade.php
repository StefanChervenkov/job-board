<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>
    <h2>Jobs</h2>
    <hr>

    <ul>
        @foreach ($jobs as $job)
            <li class="transform hover:bg-gray-500 transition duration-300 ease-in-out">
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }}$ per year.
                </a>

            </li>
        @endforeach

    </ul>


</x-layout>

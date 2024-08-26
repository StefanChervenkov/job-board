<x-layout>
    <x-slot:heading>
        Job details
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <hr>
    <p>
        This job pays {{$job['salary']}}$ per year! 
    </p>

    


</x-layout>
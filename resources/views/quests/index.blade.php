<x-layout>    
    <h2 class="text-2xl md:text-3xl font-semibold mb-4">Available Quests</h2>

    <ul>
        @foreach ($quests as $quest)
            <li>
                <x-card href="{{route('quests.show', $quest->id)}}" :highlight="$quest['difficulty'] === 'Hard'">
                <div>
                    <h3>{{ $quest->title }}</h3>
                    <p>{{$quest->region->name}}
                
                </div>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
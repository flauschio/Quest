<x-layout>
    <h2>{{ $quest->title}}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Description:</strong> {{ $quest->description }}</p>
        <p><strong>Difficulty:</strong> {{ $quest->difficulty }}</p>
        <p><strong>Reward:</strong> {{ $quest->reward }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Region Information</h3>
        <p><strong>Name:</strong> {{ $quest->region->name }}</p>
        <p><strong>Description:</strong> {{ $quest->region->description }}</p>
</x-layout>
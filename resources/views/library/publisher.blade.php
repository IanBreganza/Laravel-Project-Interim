<x-layout>
    <h2 class="text-2xl font-bold mb-4">List of Publishers:</h2>

    <ul>
        @foreach ($publishers as $publisher)
            <div class="publisher-card">
                <div class="bg-yellow-200 p-4 rounded mb-4 shadow">
                    <h3 class="text-xl font-semibold">{{ $publisher->name }}</h3>
                    <p class="text-gray-700">Address: {{ $publisher->address }}</p>
                    <p class="text-gray-600 mt-2">{{ $publisher->detail }}</p>
                </div>
            </div>
        @endforeach
    </ul>
</x-layout>

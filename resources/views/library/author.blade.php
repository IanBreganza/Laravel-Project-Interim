
<x-layout>
    <h2>List of Authors:</h2>

    <ul>
        @foreach ($authors as $author) 
        <div class=author-card>
            <div class="bg-yellow-200 p-4 rounded mb-4">
                <h3>{{ $author->name }}</h3>
                <p>Age: {{ $author->age }}</p>
                <p>Address: {{ $author->address }}</p>
                <p>{{ $author->detail }}</p>
            </div> 
        </div>
            
        @endforeach
    </ul>
</x-layout>

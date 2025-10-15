<x-layout>
    <h2>{{ $book->Title }}</h2>

    <div class="bg-yellow-200 p-4 rounded mb-4">
        <h3>Author: {{ $book->Author }}</h3>
        <p>Year: {{ $book->PublishedYear }}</p>
        <p>Genre: {{ $book->Genres }}</p>
        <p>Description: {{ $book->Summary }}</p>
    </div>   
</x-layout>

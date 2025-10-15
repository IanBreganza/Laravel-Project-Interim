<x-layout>    
    <h2>List of Books:</h2>

    <ul>
        @foreach ($books as $book)
            <li>
               <x-card href="/library/{{ $book->id }}" :highlight="$book->PublishedYear <=2020">
                
                    <h3>{{ $book->Title }}</h3>
                
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>

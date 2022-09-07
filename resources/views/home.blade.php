@extends ('layouts.main')

@section('main-content')
    <div>
        <h2>Lista prodotti</h2>
        @forelse ($elements as $comic)
        <div>
            <div>
                <img src="{{ $comic->image}}" alt="Immagine" />
            </div>
            <h6>{{ $comic->title }}</h6>
        </div>
        @empty
            <div>
                <h3>Non ci sono elementi disponibili!</h3>
            </div>
        @endforelse
    </div>
@endsection
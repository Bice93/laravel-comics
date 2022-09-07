@extends ('layouts.main')

@section('main-content')
<div class="container">
    <h2>Lista prodotti</h2>
    <div class="container_products">

        @forelse ($elements as $comic)
        <div class="product">
            <div class="box_image">
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
</div>

@endsection
@extends ('layouts.main')

@section('main-content')
    <div class="jumbotron"></div>
    <div class="rowSeries">
        <div class="container">
            <h2>Current Series</h2>
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
            <button>Load More</button>
        </div>
    </div>

    <div class="content_menu">
        <div class="container">
            <ul class="menu">
                @foreach ($links as $link)
                <li>
                    <img src="../assets/images/{{ $link->image }}" alt="" />
                    <h5> {{ $link->title }} </h5>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
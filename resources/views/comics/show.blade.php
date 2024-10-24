<!-- show.blade.php -->
@vite('resources/js/app.js')

<div class="container-show">
    <div class="card-showed">
        <div class="image-show">
            <img src="{{ $comic['image'] }}" alt="">
        </div>
        <div class="title-show">
            <h1>{{ $comic['title'] }}</h1>
        </div>
        <div class="description-show">
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="series-show">
            <p>{{ $comic['series'] }}</p>
        </div>
        <div class="price-show">
            <p>{{ $comic['price'] }}</p>
        </div>
        <div class="type-show">
            <p>{{ $comic['type'] }}</p>
        </div>
        <div class="artists-show">
            <p>{{ $comic['artists'] }}</p>
        </div>
        <div class="writers-show">
            <p>{{ $comic['writers'] }}</p>
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
        <!-- bottone che ti porta in una pagina che ti permette di editare il comic scliccato -->
        <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-primary">Edit</a>
    </div>
</div>
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
    </div>
</div>
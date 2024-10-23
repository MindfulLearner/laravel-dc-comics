<!-- logica vuejs da applicare in laravel -->
<!-- there will be applied button that will show information about the comics -->
<div class="container bg-for-card-list">
    <div class="centered">
        <div class="current-series">
            Current Series
        </div>
        <div class="card-container">
            @foreach ($comics as $comic)
            <div class="card-container-for">
                <div class="card">
                    <img src="{{ $comic['image']}}" alt="">
                </div>
                <div>
                    {{ $comic['series'] }}
                </div>
                <div>
                    {{ $comic['price'] }}
                </div>
                <!-- bottone che portera in una scheda show -->
                <a href="{{ route('comics.show', $loop->index) }}" class="btn btn-primary">Info</a>
            </div>
            @endforeach
        </div>
        <div class="load-more">
            Load More
        </div>
    </div>
</div>
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
                <a href="{{ route('comics.show', $comic['id']) }}" class="btn btn-primary">Info</a>

                <!-- prima chieder la conferma tramite js -->
                <form action="{{ route('comics.destroy', $comic['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="deleteButton btn stranger-danger">Delete</button>
                </form>

            </div>
            @endforeach
            <script>
                // logica conferma cancellazione
                document.querySelectorAll(".deleteButton").forEach(function(button) {
                    button.addEventListener("click", function(event) {
                        if (!confirm("Sei sicuro di voler cancellare questo comic?")) {
                            event.preventDefault();
                            //manda a url di cancellazione
                            // esce solo se si clicca cancel
                        }
                    });
                });
            </script>
        </div>
        <div class="load-more">
            Load More
        </div>
    </div>
</div>

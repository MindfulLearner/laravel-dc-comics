<!-- edit.blade.php -->
<!-- un layout che ti permette di editare il comic cliccato -->
@vite('resources/js/app.js')

<div class="container-edit">

    <!-- se ci sono errori li stampa -->
    @if ($errors->any())
        <div class="error-container">
            <div class="alert alert-danger">
                <ul>
                    <!-- utilizza error->all per stampare tutti gli errori -->
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif



 <form action="{{ route('comics.update', $comic['id']) }}" method="POST" class="edit-form">
    @csrf
    @method('PUT')
    <div class="form-group form-title">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic['title'] }}" class="form-control">
    </div>
    <div class="form-group form-description">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $comic['description'] }}" class="form-control">
    </div>
    <div class="form-group form-image">
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="{{ $comic['image'] }}" class="form-control">
    </div>
    <div class="form-group form-series">
        <label for="series">Series</label>
        <input type="text" name="series" id="series" value="{{ $comic['series'] }}" class="form-control">
    </div>
    <div class="form-group form-price">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="{{ $comic['price'] }}" class="form-control">
    </div>
    <div class="form-group form-type">
        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="{{ $comic['type'] }}" class="form-control">
    </div>
    <div class="form-group form-artists">
        <label for="artists">Artists</label>
        <input type="text" name="artists" id="artists" value="{{ $comic['artists'] }}" class="form-control">
    </div>
    <div class="form-group form-writers">
        <label for="writers">Writers</label>
        <input type="text" name="writers" id="writers" value="{{ $comic['writers'] }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
 </form>
</div>
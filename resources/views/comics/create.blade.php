<!-- create.blade.php -->
<!-- pagina per creare un nuovo comic -->
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

 <form action="{{ route('comics.store') }}" method="POST" class="edit-form">
    @csrf
    <div class="form-group form-title">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group form-description">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>
    <div class="form-group form-image">
        <label for="image">Image</label>
        <input type="text" name="image" id="image" class="form-control">
    </div>
    <div class="form-group form-series">
        <label for="series">Series</label>
        <input type="text" name="series" id="series" class="form-control">
    </div>
    <div class="form-group form-price">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group form-type">
        <label for="type">Type</label>
        <input type="text" name="type" id="type" class="form-control">
    </div>
    <div class="form-group form-artists">
        <label for="artists">Artists</label>
        <input type="text" name="artists" id="artists" class="form-control">
    </div>
    <div class="form-group form-writers">
        <label for="writers">Writers</label>
        <input type="text" name="writers" id="writers" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
 </form>
</div>
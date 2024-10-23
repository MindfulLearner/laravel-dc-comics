<!-- edit.blade.php -->
<!-- un layout che ti permette di editare il comic cliccato -->
@vite('resources/js/app.js')

<div class="container-edit">
 <form action="{{ route('comics.update', $comic['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $comic['title'] }}">
    <input type="text" name="description" value="{{ $comic['description'] }}">
    <input type="text" name="image" value="{{ $comic['image'] }}">
    <input type="text" name="series" value="{{ $comic['series'] }}">
    <input type="text" name="price" value="{{ $comic['price'] }}">
    <input type="text" name="type" value="{{ $comic['type'] }}">
    <input type="text" name="artists" value="{{ $comic['artists'] }}">
    <input type="text" name="writers" value="{{ $comic['writers'] }}">
    <button type="submit">Edit</button>
 </form>
</div>
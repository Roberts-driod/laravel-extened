<h1>Edit book</h1>

<form action="{{ route('books.update', ['book' => $editBook->id]) }}" method="post">
    @csrf
    @method('put')

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" 
               value="{{ old('title', $editBook->title) }}">
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="author">Author</label>
        <input type="text" name="author" id="author" 
               value="{{ old('author', $editBook->author) }}">
        @error('author')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="released_at">Release Date</label>
        <input type="date" name="released_at" id="released_at" 
               value="{{ old('released_at', $editBook->released_at) }}">
        @error('released_at')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" value="Update">
</form>


<style> 
.error {
    color: red;
    font-size: 0.9em;
}

</style>
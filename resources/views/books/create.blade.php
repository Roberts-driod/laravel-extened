<h1>New book</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{route('books.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title goes here">
    <input type="text" name="author" placeholder="author goes here">
    <input type="date" name="released_at" placeholder="date goes here">
    <input type="submit" value="Create">
</form>


<style>  
.error {
    color: red;
    font-size: 0.9em;
}
.alert-danger {
    background-color: #f8d7da;
    color: #842029;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
}

</style>
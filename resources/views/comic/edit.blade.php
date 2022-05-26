<form action="{{route('comic.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{$comic->title}}">
    </div>
    <div>
        <label for="description">description:</label>
        <input type="text" name="description " value="{{$comic->description}}">
    </div>
    <div>
        <label for="thumb">thumb:</label>
        <input type="text" name="thumb" value="{{$comic->thumb}}">
    </div>
    <div>
        <label for="price">price:</label>
        <input type="text" name="price" value="{{$comic->price}}">
    </div>
    <div>
        <label for="series">series:</label>
        <input type="text" name="series" value="{{$comic->series}}">
    </div>
    <div>
        <label for="type">type:</label>
        <input type="text" name="type" value="{{$comic->type}}">
    </div>
    <div>
        <label for="sale_date">sale_date:</label>
        <input type="text" name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <button type="submit">
        add
    </button>
</form>
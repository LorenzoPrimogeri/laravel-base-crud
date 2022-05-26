<form action="{{route('comic.store')}}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="description">description:</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="thumb">thumb:</label>
        <input type="text" name="thumb">
    </div>
    <div>
        <label for="price">price:</label>
        <input type="text" name="price">
    </div>
    <div>
        <label for="series">series:</label>
        <input type="text" name="series">
    </div>
    <div>
        <label for="type">type:</label>
        <input type="text" name="type">
    </div>
    <div>
        <label for="sale_date">sale_date:</label>
        <input type="text" name="sale_date">
    </div>
    <button type="submit">
        add
    </button>
</form>
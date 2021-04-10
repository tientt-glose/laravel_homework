<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <label for="name">Product name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity"><br>
    <label for="category">Choose catergory:</label><br>
    <select id="category" name="category[]" multiple>
        <option value="0">Van hoa</option>
        <option value="1">The thao</option>
        <option value="2">Game</option>
        <option value="3">Lich su</option>
    </select>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

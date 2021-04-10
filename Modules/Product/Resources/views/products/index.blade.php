<table style="width:100%">
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Created Time</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product['name'] }}</td>
        <td>{{ $product['quantity'] }}</td>
        <td>{{ $product['category'] }}</td>
        <td>{{ $product['created_at'] }}</td>
    </tr>
    @endforeach
</table>
<div>
    <a href="{{ route('products.create') }}"><button type="button">Create user!</button>
</div>

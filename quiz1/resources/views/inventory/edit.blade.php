<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Inventory Item</title>
</head>
<body>
    <h1>Edit Item: {{ $inventoryItem->name }}</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ str_replace(':8000', '', config('app.url')) . '/inventory/' . $inventoryItem->id}}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name', $inventoryItem->name) }}" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ old('quantity', $inventoryItem->quantity) }}" required>

        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ old('price', $inventoryItem->price) }}" required>

        <button type="submit">Update Item</button>

    </form>

    <a href="{{ str_replace(':8000', '', config('app.url')) . '/inventory' }}">Back to Inventory</a>

</body>
</html>
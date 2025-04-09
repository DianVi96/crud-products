<h1>Editar Producto</h1>
<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}"><br>
    <textarea name="description">{{ $product->description }}</textarea><br>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}"><br>
    <button type="submit">Actualizar</button>
</form>
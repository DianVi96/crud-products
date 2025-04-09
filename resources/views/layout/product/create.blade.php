<h1>Nuevo Producto</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre"><br>
    <textarea name="description" placeholder="Descripción"></textarea><br>
    <input type="number" step="0.01" name="price" placeholder="Precio"><br>
    <button type="submit">Guardar</button>
</form>
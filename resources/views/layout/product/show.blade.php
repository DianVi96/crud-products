<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Precio: ${{ $product->price }}</p>
<a href="{{ route('products.index') }}">Volver</a>
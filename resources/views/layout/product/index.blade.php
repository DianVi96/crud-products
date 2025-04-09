@@extends('layout.app')
@section('content')
<h1>Lista de Productos</h1>
<a href="{{ route('products.create') }}">Nuevo producto</a>

<ul>
@foreach($products as $product)
    <li>
        <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
        - ${{ $product->price }}
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
        <a href="{{ route('products.edit', $product) }}">Editar</a>
    </li>
@endforeach
</ul>

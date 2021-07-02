<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Productos' }}</x-contenttitulo>
  <x-crudlist>
    <x-slot name="titulo">{{ 'Productos' }}</x-slot>
    <x-slot name="subtitulo">{{ 'Lista de Productos' }}</x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Producto' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('productos.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Categoria</x-crudthead>
      <x-crudthead>Subcategoria</x-crudthead>
      <x-crudthead>Nombre</x-crudthead>
      <x-crudthead>Marca</x-crudthead>
      <x-crudthead>Modelo</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($productos as $producto)
        <tr>
          <x-crudtbody>{{ $producto->id }}</x-crudtbody>
          <x-crudtbody>{{ $producto->subcategoria->categoria->descripcion }}</x-crudtbody>
          <x-crudtbody>{{ $producto->subcategoria->descripcion }}</x-crudtbody>
          <x-crudtbody>{{ $producto->nombre }}</x-crudtbody>
          <x-crudtbody>{{ $producto->marca }}</x-crudtbody>
          <x-crudtbody>{{ $producto->modelo }}</x-crudtbody>
          <x-crudbotones>
            <x-botoneditar url="{{ route('productos.edit', $producto->id) }}"> </x-botoneditar>
            <x-botoneliminar url="{{ route('productos.destroy', $producto) }}">  </x-botoneliminar>
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $productos->links() !!}
    </x-slot>
  </x-crudlist>
</x-slot>

</x-master-layout>
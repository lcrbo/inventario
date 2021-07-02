
<x-master-layout>

<x-slot name="slot"> 

  <x-contenttitulo>{{ 'Categorias' }}</x-contenttitulo>

  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Categorias' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nueva Categoria' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('categorias.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripción</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($categorias as $categoria)
        <tr>
          <x-crudtbody>{{ $categoria->id }}</x-crudtbody>
          <x-crudtbody>{{ $categoria->descripcion }}</x-crudtbody>
          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('categorias.destroy', $categoria) }} 
            <x-slot name="urleditar">{{ route('categorias.edit', $categoria->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
 
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $categorias->links() !!}
    </x-slot>
  </x-crudlist>
  </x-slot>
  
</x-master-layout>

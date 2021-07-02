
<x-master-layout>

<x-slot name="slot">

  <x-contenttitulo>{{ 'SubCategorias' }}</x-contenttitulo>

  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Subategorias' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nueva Subcategoria' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('subcategorias.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripción</x-crudthead>
      <x-crudthead>Categoria</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($subcategorias as $subcategoria)
        <tr>
          <x-crudtbody>{{ $subcategoria->id }}</x-crudtbody>
          <x-crudtbody>{{ $subcategoria->descripcion }}</x-crudtbody>
          <x-crudtbody>{{ $subcategoria->categoria->descripcion }}</x-crudtbody>
     
         <x-crudbotones>
            <x-botoneditareliminar> {{ route('subcategorias.destroy', $subcategoria) }}
            <x-slot name="urleditar">{{ route('subcategorias.edit', $subcategoria->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $subcategorias->links() !!}
    </x-slot>
  </x-crudlist>
</x-slot>
</x-master-layout>

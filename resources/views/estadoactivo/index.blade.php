
<x-master-layout>

<x-slot name="slot"> 

  <x-contenttitulo>{{ 'Estado de los Activos' }}</x-contenttitulo>

  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Estados' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Estado' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('estadoactivos.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripción</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($estadoactivos as $estadoactivo)
        <tr>
          <x-crudtbody>{{ $estadoactivo->id }}</x-crudtbody>
          <x-crudtbody>{{ $estadoactivo->descripcion }}</x-crudtbody>
          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('estadoactivos.destroy', $estadoactivo) }} 
            <x-slot name="urleditar">{{ route('estadoactivos.edit', $estadoactivo->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
 
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $estadoactivos->links() !!}
    </x-slot>
  </x-crudlist>
  </x-slot>
  
</x-master-layout>


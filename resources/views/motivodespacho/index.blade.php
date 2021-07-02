<x-master-layout>

<x-slot name="slot"> 

  <x-contenttitulo>{{ 'Motivo Despacho' }}</x-contenttitulo>

  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Motivos' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Motivo' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('motivodespachos.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripción</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($motivodespachos as $motivodespacho)
        <tr>
          <x-crudtbody>{{ $motivodespacho->id }}</x-crudtbody>
          <x-crudtbody>{{ $motivodespacho->descripcion }}</x-crudtbody>
          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('motivodespachos.destroy', $motivodespacho) }} 
            <x-slot name="urleditar">{{ route('motivodespachos.edit', $motivodespacho->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
 
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $motivodespachos->links() !!}
    </x-slot>
  </x-crudlist>
  </x-slot>
  
</x-master-layout>


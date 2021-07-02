
<x-master-layout>

<x-slot name="slot"> 

  <x-contenttitulo>{{ 'Motivo cambio de Estado' }}</x-contenttitulo>

  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Motivos' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Motivo' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('motivocambioestados.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Motivo</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($motivocambioestados as $motivocambioestado)
        <tr>
          <x-crudtbody>{{ $motivocambioestado->id }}</x-crudtbody>
          <x-crudtbody>{{ $motivocambioestado->motivo }}</x-crudtbody>
          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('motivocambioestados.destroy', $motivocambioestado) }} 
            <x-slot name="urleditar">{{ route('motivocambioestados.edit', $motivocambioestado->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
 
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $motivocambioestados->links() !!}
    </x-slot>
  </x-crudlist>
  </x-slot>
  
</x-master-layout>


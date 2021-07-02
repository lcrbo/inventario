
<x-master-layout>
  <x-slot name="slot">
    <x-contenttitulo>{{ 'Ubicación' }}</x-contenttitulo>
    <x-crudlist>
      <x-slot name="titulo">{{ 'Lista de Ubicaciones' }}</x-slot>
      <x-slot name="subtitulo"></x-slot>
      <x-slot name="NuevoBoton">{{ 'Nueva Ubicacion' }}</x-slot>
      <x-slot name="UrlNuevoBoton">{{ route('ubicacions.create') }}</x-slot>
      <x-slot name="thead">
        <x-crudthead>Id</x-crudthead>
        <x-crudthead>Descripción</x-crudthead>
        <x-crudthead>dirección</x-crudthead>
        <x-crudthead>Comuna</x-crudthead>
        <x-crudthead>Ciudad</x-crudthead>
        <x-crudthead>Región</x-crudthead>
      </x-slot>
      <x-slot name="tbody">
      
        @foreach ($ubicacions as $ubicacion)
        <tr>
          <x-crudtbody>{{ $ubicacion->id }}</x-crudtbody>
          <x-crudtbody>{{ $ubicacion->descripcion }}</x-crudtbody>
          <x-crudtbody>{{ $ubicacion->direccion }}</x-crudtbody>
          <x-crudtbody>{{ $ubicacion->comuna }}</x-crudtbody>
          <x-crudtbody>{{ $ubicacion->ciudad }}</x-crudtbody>
          <x-crudtbody>{{ $ubicacion->region }}</x-crudtbody>
          
          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('ubicacions.destroy', $ubicacion) }}
            <x-slot name="urleditar">{{ route('ubicacions.edit', $ubicacion->id) }}</x-slot>
            </x-botoneditareliminar>
          </x-crudbotones>

        </tr>
        @endforeach
      
      </x-slot>
      <x-slot name="links">
        {!! $ubicacions->links() !!}
      </x-slot>
    </x-crudlist>
  </x-slot>


</x-master-layout>


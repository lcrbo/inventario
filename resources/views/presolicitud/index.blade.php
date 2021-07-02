<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Pre - Solicitud' }}</x-contenttitulo>
  <x-crudlist>
    <x-slot name="titulo">Lista de Productos</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nueva Pre-Solicitud' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('presolicitud.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripcion</x-crudthead>

    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($presolicituds as $presolicitud)
        <tr>
          <x-crudtbody>{{ $presolicitud->id }}</x-crudtbody>
          <x-crudtbody>{{ $presolicitud->descripcion }}</x-crudtbody>

          <x-crudbotones>
            <x-botoneditar url="{{ route('presolicitud.edit', $presolicitud->id) }}"> </x-botoneditar>
            <x-botoneliminar url="{{ route('presolicitud.destroy', $presolicitud) }}">  </x-botoneliminar>
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $presolicituds->links() !!}
    </x-slot>
  </x-crudlist>
</x-slot>

</x-master-layout>

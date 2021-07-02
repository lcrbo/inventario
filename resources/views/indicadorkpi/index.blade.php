<x-master-layout>

<x-slot name="slot">

  <x-crudlist>
    <x-slot name="titulo">{{ 'lista de KPI' }}</x-slot>
    <x-slot name="subtitulo">{{ 'Lista de KPI' }}</x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo KPI' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('indicadorkpi.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Nombre</x-crudthead>
      <x-crudthead>Formato</x-crudthead>
      <x-crudthead>Umbral1</x-crudthead>
      <x-crudthead>Activo</x-crudthead>

    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($indicadorkpis as $indicadorkpi)
        <tr>
          <x-crudtbody>{{ $indicadorkpi->id }}</x-crudtbody>
          <x-crudtbody>{{ $indicadorkpi->indicador</x-crudtbody>
          <x-crudtbody>{{ $indicadorkpi->nombre }}</x-crudtbody>
          <x-crudtbody>{{ $indicadorkpi->formato }}</x-crudtbody>
          <x-crudtbody>{{ $indicadorkpi->umbral1 }}</x-crudtbody>
          <x-crudtbody>{{ $indicadorkpi->activo }}</x-crudtbody>
          <x-crudbotones>
            <x-botoneditar url="{{ route('indicadorkpi.edit', $indicadorkpi->id) }}"> </x-botoneditar>
            <x-botoneliminar url="{{ route('indicadorkpi.destroy', $indicadorkpi) }}">  </x-botoneliminar>
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $indicadorkpis->links() !!}
    </x-slot>
  </x-crudlist>

</x-app-layout>


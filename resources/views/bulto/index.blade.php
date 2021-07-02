
<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ ' Bultos' }}</x-contenttitulo>
  <x-crudlist>
    <x-slot name="titulo">Lista de Bultos</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nueva bulto' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('bulto.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Codigo Bulto</x-crudthead>
      <x-crudthead>Descripción</x-crudthead>
      <x-crudthead>Fecha</x-crudthead>
      
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($bultos as $bulto)
        <tr>
          <x-crudtbody>{{ $bulto->id }}</x-crudtbody>
          <x-crudtbody>{{ $bulto->codigobulto }}</x-crudtbody>
          <x-crudtbody>{{ $bulto->descripcion }}</x-crudtbody>
          <x-crudtbody>{{ $bulto->fecha }}</x-crudtbody>
          <x-crudbotones>
            <x-botoneditar url="{{ route('bulto.edit', $bulto->id) }}"> </x-botoneditar>
            <x-botoneliminar url="{{ route('bulto.destroy', $bulto) }}">  </x-botoneliminar>
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $bultos->links() !!}
    </x-slot>
  </x-crudlist>
</x-slot>

</x-master-layout>


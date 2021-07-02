
<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ ' Solicitud Despacho' }}</x-contenttitulo>
  <x-crudlist>
    <x-slot name="titulo">Lista de despacho</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nueva despacho' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('despacho.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripcion</x-crudthead>
      <x-crudthead>Fecha</x-crudthead>
      <x-crudthead>Destino</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($despachos as $despacho)
        <tr>
          <x-crudtbody>{{ $despacho->id }}</x-crudtbody>
          <x-crudtbody>{{ $despacho->descripcion }}</x-crudtbody>
          <x-crudtbody>{{ $despacho->fechadespacho }}</x-crudtbody>
          <x-crudtbody>{{ $despacho->destino }}</x-crudtbody>
          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('despacho.destroy', $despacho) }} 
            <x-slot name="urleditar">{{ route('despacho.edit', $despacho->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $despachos->links() !!}
    </x-slot>
  </x-crudlist>
</x-slot>

</x-master-layout>


<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Proveedores' }}</x-contenttitulo>
  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Proveedores' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Proveedor' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('proveedores.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Rut</x-crudthead>
      <x-crudthead>Razón social</x-crudthead>
      <x-crudthead>Nombre del contacto</x-crudthead>
      <x-crudthead>Teléfono</x-crudthead>
      <x-crudthead>Correo</x-crudthead>
      <x-crudthead>Dirección</x-crudthead>
      
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($proveedores as $proveedore)
        <tr>
          <x-crudtbody>{{ $proveedore->id }}</x-crudtbody>
          <x-crudtbody>{{ $proveedore->rut }}</x-crudtbody>
          <x-crudtbody>{{ $proveedore->razonsocial }}</x-crudtbody>
          <x-crudtbody>{{ $proveedore->nombrecontacto }}</x-crudtbody>
          <x-crudtbody>{{ $proveedore->telefono }}</x-crudtbody>
          <x-crudtbody>{{ $proveedore->correo }}</x-crudtbody>
          <x-crudtbody>{{ $proveedore->direccion }}</x-crudtbody>
         

          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('proveedores.destroy', $proveedore) }} 
            <x-slot name="urleditar">{{ route('proveedores.edit', $proveedore->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $proveedores->links() !!}
    </x-slot>
  </x-crudlist>
  </x-slot>
</x-master-layout>


<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Tipo de Documento' }}</x-contenttitulo>
  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Documentos' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Documento' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('tipodocumentos.create') }}</x-slot>
    <x-slot name="thead">
      <x-crudthead>Id</x-crudthead>
      <x-crudthead>Descripción</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($tipodocumentos as $tipodocumento)
        <tr>
          <x-crudtbody>{{ $tipodocumento->id }}</x-crudtbody>
          <x-crudtbody>{{ $tipodocumento->descripcion }}</x-crudtbody>

          
          <x-crudbotones>
            <x-botoneditareliminar> {{ route('tipodocumentos.destroy', $tipodocumento) }}
            <x-slot name="urleditar">{{ route('tipodocumentos.edit', $tipodocumento->id) }}</x-slot>
            </x-botoneditareliminar>
            
          </x-crudbotones>
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $tipodocumentos->links() !!}
    </x-slot>
  </x-crudlist>

  </x-slot>
</x-master-layout>






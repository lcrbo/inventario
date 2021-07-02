<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Tipo de Documento' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Incorporar nuevo Documento</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="action">{{route('tipodocumentos.store')}}</x-slot> 
    
    <x-slot name="campos">

      <x-label>
            <x-slot name="nombre">Descripción Tipo de Documento</x-slot>
            <x-slot name="campo">descripcion</x-slot>
            <x-slot name="valor">{{old('descripcion',$tipodocumento->descripcion)}}</x-slot>
      </x-label>

      
      <x-slot name="botones">
            <x-botonsubmit>Actualizar</x-botonsubmit>
            <x-botonvolver>{{ route('tipodocumentos.index')}}</x-botonvolver>
          </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>
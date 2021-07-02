
<x-master-layout>

<x-slot name="slot">

  <x-contenttitulo>{{ 'Pre - Solicitud' }}</x-contenttitulo>

  <x-crudform>
      <x-slot name="titulo">Incorporar nueva Pre - Solicitud</x-slot>
      <x-slot name="subtitulo"></x-slot>
      <x-slot name="action">{{route('presolicitud.store')}}</x-slot> 
      
      <x-slot name="campos">

      <x-label>
        <x-slot name="nombre">Descripción Pre-Solicitud</x-slot> 
        <x-slot name="campo">Descripcion</x-slot> 
        <x-slot name="valor">{{old('descripcion',$presolicitud->descripcion)}}</x-slot> 
      </x-label>

        
        <x-slot name="botones">
          <x-botonsubmit>Actualizar</x-botonsubmit>
          <x-botonvolver>{{ route('presolicitud.index')}}</x-botonvolver>
        </x-slot>
      </x-slot>
  </x-crudform>

</x-slot>
</x-master-layout>

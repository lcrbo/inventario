
<x-master-layout>

<x-slot name="slot">

  <x-contenttitulo>{{ 'Motivo cambio de Activos' }}</x-contenttitulo>

  <x-crudform>
      <x-slot name="titulo">Incorporar nuevo Motivo</x-slot>
      <x-slot name="subtitulo"></x-slot>
      <x-slot name="action">{{route('motivocambioestados.store')}}</x-slot> 
      
      <x-slot name="campos">

      <x-label>
        <x-slot name="nombre">Motivo</x-slot> 
        <x-slot name="campo">motivo</x-slot> 
        <x-slot name="valor">{{old('motivo',$motivocambioestado->descripcion)}}</x-slot> 
      </x-label>

        
        <x-slot name="botones">
          <x-botonsubmit>Actualizar</x-botonsubmit>
          <x-botonvolver>{{ route('motivocambioestados.index')}}</x-botonvolver>
        </x-slot>
      </x-slot>
  </x-crudform>

</x-slot>
</x-master-layout>



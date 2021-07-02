
<x-master-layout>

<x-slot name="slot">

  <x-contenttitulo>{{ 'Motivo Despacho' }}</x-contenttitulo>

  <x-crudform>
      <x-slot name="titulo">Incorporar nuevo Motivo Despacho</x-slot>
      <x-slot name="subtitulo"></x-slot>
      <x-slot name="action">{{route('motivodespachos.store')}}</x-slot> 
      
      <x-slot name="campos">

      <x-label>
        <x-slot name="nombre">Descripción</x-slot> 
        <x-slot name="campo">descripcion</x-slot> 
        <x-slot name="valor">{{old('descripcion',$motivodespacho->descripcion)}}</x-slot> 
      </x-label>

        
        <x-slot name="botones">
          <x-botonsubmit>Actualizar</x-botonsubmit>
          <x-botonvolver>{{ route('motivodespachos.index')}}</x-botonvolver>
        </x-slot>
      </x-slot>
  </x-crudform>

</x-slot>
</x-master-layout>


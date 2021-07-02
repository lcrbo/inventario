<x-master-layout>

  <x-slot name="slot">

    <x-contenttitulo>{{ 'Estado de los Activos' }}</x-contenttitulo>

    <x-crudform>
        <x-slot name="titulo">Incorporar nuevo Estado</x-slot>
        <x-slot name="subtitulo"></x-slot>
        <x-slot name="action">{{route('estadoactivos.store')}}</x-slot> 
        
        <x-slot name="campos">

        <x-label>
          <x-slot name="nombre">Descripción Categoria</x-slot> 
          <x-slot name="campo">descripcion</x-slot> 
          <x-slot name="valor">{{old('descripcion',$estadoactivo->descripcion)}}</x-slot> 
        </x-label>

          
          <x-slot name="botones">
            <x-botonsubmit>Actualizar</x-botonsubmit>
            <x-botonvolver>{{ route('estadoactivos.index')}}</x-botonvolver>
          </x-slot>
        </x-slot>
    </x-crudform>
 
  </x-slot>
</x-master-layout>



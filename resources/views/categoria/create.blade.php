<x-master-layout>

  <x-slot name="slot">

    <x-contenttitulo>{{ 'Categorias' }}</x-contenttitulo>

    <x-crudform>
        <x-slot name="titulo">Incorporar nueva Categoria</x-slot>
        <x-slot name="subtitulo"></x-slot>
        <x-slot name="action">{{route('categorias.store')}}</x-slot> 
        
        <x-slot name="campos">

        <x-label>
          <x-slot name="nombre">Descripción Categoria</x-slot> 
          <x-slot name="campo">descripcion</x-slot> 
          <x-slot name="valor">{{old('descripcion',$categoria->descripcion)}}</x-slot> 
        </x-label>

          
          <x-slot name="botones">
            <x-botonsubmit>Actualizar</x-botonsubmit>
            <x-botonvolver>{{ route('categorias.index')}}</x-botonvolver>
          </x-slot>
        </x-slot>
    </x-crudform>
 
  </x-slot>
</x-master-layout>


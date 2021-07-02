<x-master-layout>
   
<x-slot name="slot">
  <x-contenttitulo>{{ 'Motivo Despacho' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Modificar Motivo</x-slot>
    <x-slot name="subtitulo">[ {{$motivodespacho->descripcion }} ].</x-slot>
    <x-slot name="action">{{ route('motivodespachos.update', $motivodespacho->id) }}</x-slot> 
    <x-slot name="metodo">@method('put') </x-slot>
    
    <x-slot name="campos">

        <x-label>
            <x-slot name="nombre">Descripción</x-slot>
            <x-slot name="campo">descripcion</x-slot>
            <x-slot name="valor">{{old('descripcion',$motivodespacho->descripcion)}}</x-slot>
          </x-label>

      <x-slot name="botones">
        <x-botonsubmit>{{ 'Actualizar' }} </x-botonsubmit>
        <x-botonvolver>{{ route('motivodespachos.index')}}</x-botonvolver>

      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>


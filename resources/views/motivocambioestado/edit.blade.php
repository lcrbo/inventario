<x-master-layout>
   
<x-slot name="slot">
  <x-contenttitulo>{{ 'Motivo Cambio de Estado' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Modificar Motivo</x-slot>
    <x-slot name="subtitulo">[ {{$motivocambioestado->descripcion }} ].</x-slot>
    <x-slot name="action">{{ route('motivocambioestados.update', $motivocambioestado->id) }}</x-slot> 
    <x-slot name="metodo">@method('put') </x-slot>
    
    <x-slot name="campos">

        <x-label>
            <x-slot name="nombre">Motivo</x-slot>
            <x-slot name="campo">motivo</x-slot>
            <x-slot name="valor">{{old('motivo',$motivocambioestado->motivo)}}</x-slot>
          </x-label>

      <x-slot name="botones">
        <x-botonsubmit>{{ 'Actualizar' }} </x-botonsubmit>
        <x-botonvolver>{{ route('motivocambioestados.index')}}</x-botonvolver>

      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>


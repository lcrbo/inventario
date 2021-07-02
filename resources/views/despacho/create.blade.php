<x-master-layout>

<x-slot name="slot">

  <x-contenttitulo>{{ 'Crear - Solicitud' }}</x-contenttitulo>

  <x-crudform>
      <x-slot name="titulo">Incorporar nueva Solicitud Despacho</x-slot>
      <x-slot name="subtitulo"></x-slot>
      <x-slot name="action">{{route('despacho.store')}}</x-slot> 
      
      <x-slot name="campos">

      <x-label>
        <x-slot name="nombre">Descripción Solicitud</x-slot> 
        <x-slot name="campo">descripcion</x-slot> 
        <x-slot name="valor">{{old('descripcion',$despacho->descripcion)}}</x-slot> 
      </x-label>

      <x-label>
        <x-slot name="nombre">Fecha despacho</x-slot> 
        <x-slot name="campo">fechadespacho</x-slot> 
        <x-slot name="valor">{{old('fechadespacho',$despacho->fechadespacho)}}</x-slot> 
      </x-label>

      <x-label>
        <x-slot name="nombre">Comentario</x-slot> 
        <x-slot name="campo">comentario</x-slot> 
        <x-slot name="valor">{{old('comentario',$despacho->comentario)}}</x-slot> 
      </x-label>
      <x-label>
        <x-slot name="nombre">Destino</x-slot> 
        <x-slot name="campo">destino</x-slot> 
        <x-slot name="valor">{{old('destino',$despacho->destino)}}</x-slot> 
      </x-label>
      <x-label>
        <x-slot name="nombre">Motivo despacho</x-slot> 
        <x-slot name="campo">motivodespacho</x-slot> 
        <x-slot name="valor">{{old('motivodespacho',$despacho->motivodespacho)}}</x-slot> 
      </x-label>
        
        <x-slot name="botones">
          <x-botonsubmit>Actualizar</x-botonsubmit>
          <x-botonvolver>{{ route('despacho.index')}}</x-botonvolver>
        </x-slot>
      </x-slot>
  </x-crudform>

</x-slot>
</x-master-layout>



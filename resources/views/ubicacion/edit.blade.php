<x-master-layout>

   
  <x-slot name="slot">
    <x-contenttitulo>{{ 'Ubicación' }}</x-contenttitulo>
    <x-crudform>
        <x-slot name="titulo">Modificar Ubicación</x-slot>
        <x-slot name="subtitulo">[ {{$ubicacion->descripcion }} ].</x-slot>
        <x-slot name="action">{{ route('ubicacions.update', $ubicacion->id) }}</x-slot> 
        <x-slot name="metodo">@method('put') </x-slot>
        
        <x-slot name="campos">

        <x-label>
            <x-slot name="nombre">Descripción de la Ubicación</x-slot> 
            <x-slot name="campo">descripcion</x-slot> 
            <x-slot name="valor">{{old('descripcion',$ubicacion->descripcion)}}</x-slot> 
          </x-label>
          <x-label>
            <x-slot name="nombre">Dirección</x-slot> 
            <x-slot name="campo">direccion</x-slot> 
            <x-slot name="valor">{{old('direccion',$ubicacion->direccion)}}</x-slot> 
          </x-label>
          <x-label>
            <x-slot name="nombre">Comuna</x-slot> 
            <x-slot name="campo">comuna</x-slot> 
            <x-slot name="valor">{{old('comuna',$ubicacion->comuna)}}</x-slot> 
          </x-label>
          <x-label>
            <x-slot name="nombre">Ciudad</x-slot> 
            <x-slot name="campo">ciudad</x-slot> 
            <x-slot name="valor">{{old('ciudad',$ubicacion->ciudad)}}</x-slot> 
          </x-label>
          <x-label>
            <x-slot name="nombre">Región</x-slot> 
            <x-slot name="campo">region</x-slot> 
            <x-slot name="valor">{{old('region',$ubicacion->region)}}</x-slot> 
          </x-label>

          
          <x-slot name="botones">
            <x-botonsubmit>{{ 'Actualizar' }} </x-botonsubmit>
            <x-botonvolver>{{ route('ubicacions.index')}}</x-botonvolver>

          </x-slot>
        </x-slot>
    </x-crudform>

  </x-slot>
</x-master-layout>


<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Activos' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Incorporar nuevo activo</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="action">{{route('activos.store')}}</x-slot> 
    
    <x-slot name="campos">

    <x-combo nombre="Producto" campo="producto_id" >
    <x-slot name="nombre">Producto</x-slot>
    <x-slot name="campo">producto_id</x-slot>
        <x-slot name="condicion">
            @foreach($data['productos'] as $producto)
                        <option value = "{{ $producto->id}}" >
                        {{ $producto->subcategoria->categoria->descripcion }} /
                    {{ $producto->subcategoria->descripcion }} /
                    {{ $producto->nombre }} /
                    {{ $producto->marca }} /
                    {{ $producto->modelo }}
                        </option>
              @endforeach
        </x-slot>
      </x-combo>
      <x-label>
          <x-slot name="nombre">Nro. Serie</x-slot> 
          <x-slot name="campo">serie</x-slot> 
          <x-slot name="valor">{{old('serie',$activo->serie)}}</x-slot> 
        </x-label>
    <x-label>
          <x-slot name="nombre">Código Activo</x-slot> 
          <x-slot name="campo">codigoactivo</x-slot> 
          <x-slot name="valor">{{old('codigoactivo',$activo->codigoactivo)}}</x-slot> 
        </x-label>
       <x-label>
          <x-slot name="nombre">Stock</x-slot> 
          <x-slot name="campo">stock</x-slot> 
          <x-slot name="valor">{{old('stock',$activo->stock)}}</x-slot> 
        </x-label>
        <x-label>
          <x-slot name="nombre">Observacion</x-slot> 
          <x-slot name="campo">obsevacion</x-slot> 
          <x-slot name="valor">{{old('observacion',$activo->observacion)}}</x-slot> 
        </x-label>
        <x-combo>
          <x-slot name="nombre">Ubicación</x-slot> 
          <x-slot name="campo">ubicacion_id</x-slot> 
           
          <x-slot name="condicion">
            @foreach($data['ubicacions'] as $ubicacion)
                        <option value = "{{ $ubicacion->id}}" >
                        {{ $ubicacion->descripcion }} 
                        </option>
            @endforeach
          </x-slot>
      </x-combo>

      <x-combo nombre="Estado" campo="estado_id" >
        <x-slot name="nombre">Estado</x-slot> 
        <x-slot name="campo">estado_id</x-slot> 
        <x-slot name="condicion">
            @foreach($data['estadostocks'] as $estadostock)
                  @if ($estadostock->descripcion ==  "DISPONIBLE")
                        <option value = "{{ $estadostock->id}}" selected="selected" >
                        {{ $estadostock->descripcion }} 
                        </option>
                  @endif 
            @endforeach
        </x-slot>
</x-combo>
      


      <x-slot name="botones">
            <x-botonsubmit>Actualizar</x-botonsubmit>
            <x-botonvolver>{{ route('activos.index')}}</x-botonvolver>
          </x-slot>


    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>



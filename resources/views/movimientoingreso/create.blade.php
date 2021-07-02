
<x-master-layout>

<x-slot name="slot">

<x-contenttitulo>{{ 'Activos Nuevos' }}</x-contenttitulo>

<x-crudform>
    <x-slot name="titulo">Incorporar activo nuevo</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="action">{{route('movimientoingresos.store')}}</x-slot> 
    
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
      
      <x-label nombre="Orden de Compra" campo="ordencompra" valor="{{old('ordencompra',$movimientoingreso->ordencompra)}}">
        <x-slot name="nombre">Orden de Compra</x-slot>
        <x-slot name="campo">ordencompra</x-slot>
        <x-slot name="valor">{{old('ordencompra',$movimientoingreso->ordencompra)}}</x-slot>
      </x-label>

      <x-combo nombre="Proveedor" campo="proveedor_id" >
        <x-slot name="nombre">Proveedor</x-slot>
        <x-slot name="campo">proveedor_id</x-slot>
        <x-slot name="condicion">
            @foreach($data['proveedores'] as $proveedore)
                        <option value = "{{ $proveedore->id}}" >
                        {{ $proveedore->razonsocial }} 
                        </option>
              @endforeach
        </x-slot>
      </x-combo>

      <x-combo nombre="Tipo Documento" campo="tipodocumento_id" >
        <x-slot name="nombre">Tipo Documento</x-slot>
        <x-slot name="campo">tipodocumento_id</x-slot>
        <x-slot name="condicion">
            @foreach($data['tipodocumentos'] as $tipodocumento)
                        <option value = "{{ $tipodocumento->id}}" >
                        {{ $tipodocumento->descripcion }} 
                        </option>
              @endforeach
        </x-slot>
      </x-combo>
    <x-label nombre="Nro. Documento" campo="numerodocumento" valor="{{old('numerodocumento',$movimientoingreso->numerodocumento)}}">
        <x-slot name="nombre">Nro. Documento</x-slot>
        <x-slot name="campo">numerodocumento</x-slot>
        <x-slot name="valor">{{old('numerodocumento',$movimientoingreso->numerodocumento)}}</x-slot>
    </x-label>
    <x-label nombre="Nro. Serie" campo="serie" valor="{{old('serie',$movimientoingreso->serie)}}">
        <x-slot name="nombre">Nro. Serie</x-slot>
        <x-slot name="campo">serie</x-slot>
        <x-slot name="valor">{{old('serie',$movimientoingreso->serie)}}</x-slot>
    </x-label>
    <x-label nombre="Código Activo" campo="codigoactivo" valor="{{old('codigoactivo',$movimientoingreso->codigoactivo)}}">
        <x-slot name="nombre">Código Activo</x-slot>
        <x-slot name="campo">codigoactivo</x-slot>
        <x-slot name="valor">{{old('codigoactivo',$movimientoingreso->codigoactivo)}}</x-slot>
    </x-label>
    <x-label nombre="Stock" campo="stock" valor="{{old('stock',$movimientoingreso->stock)}}">
        <x-slot name="nombre">Stock</x-slot>
        <x-slot name="campo">stock</x-slot>
        <x-slot name="valor">{{old('stock',$movimientoingreso->stock)}}</x-slot>
    </x-label>
    <x-label nombre="Observacion" campo="observacion" valor="{{old('observacion',$movimientoingreso->observacion)}}">
        <x-slot name="nombre">Observacion</x-slot>
        <x-slot name="campo">observacion</x-slot>
        <x-slot name="valor">{{old('observacion',$movimientoingreso->observacion)}}</x-slot>
    </x-label>
    <x-combo nombre="Ubicación" campo="ubicacion_id" >
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

      <x-combo nombre="Estado" campo="estado_stock_id" >
        <x-slot name="nombre">Estado</x-slot>
        <x-slot name="campo">estado_stock_id</x-slot>
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
        <x-boton color="green" url="{{ URL::previous() }}"> Volver </x-botonEditar>
      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>




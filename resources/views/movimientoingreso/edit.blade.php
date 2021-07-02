
<x-master-layout>

   
<x-slot name="slot">
<x-contenttitulo>{{ 'Revision del Activo' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Activo [ {{$movimientoingreso->producto->nombre }} - {{$movimientoingreso->producto->marca }}  - {{$movimientoingreso->producto->modelo }} ].</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="action">{{ route('movimientoingresos.update', $movimientoingreso->id) }}</x-slot> 
    <x-slot name="metodo">@method('put') </x-slot>

    <x-slot name="campos">

    Producto
    <label  class="block text-sm font-medium text-gray-700">
                    {{ $movimientoingreso->producto->subcategoria->categoria->descripcion }} /
                    {{ $movimientoingreso->producto->subcategoria->descripcion }} /
                    {{ $movimientoingreso->producto->nombre }} /
                    {{ $movimientoingreso->producto->marca }} /
                    {{ $movimientoingreso->producto->modelo }}
              {{$movimientoingreso->serie }} - {{$movimientoingreso->codigoactivo }} 
    <label>
             
      <x-combo nombre="Estado" campo="estado_stock_id" >
        <x-slot name="nombre">Estado</x-slot>
        <x-slot name="campo">estado_stock_id</x-slot>
        <x-slot name="condicion">
          @foreach($estadostocks as $estadostock)
            <option value = "{{ $estadostock->id}}" 
              @if ($estadostock->id  == $movimientoingreso->estado_stock_id)
                  selected="selected"
              @endif
            >{{$estadostock->descripcion}} </option>
            @endforeach

        </x-slot>
      </x-combo>
      </x-slot>
      <x-slot name="botones">
        <x-botonsubmit>Actualizar</x-botonsubmit>
        <x-boton color="green" url="{{  URL::previous() }}"> Volver </x-botonEditar>
      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>
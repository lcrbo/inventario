
<x-master-layout>
  
  <x-slot name="slot">
    <x-contenttitulo>{{ 'Activos' }}</x-contenttitulo>
    <x-crudform>
        <x-slot name="titulo">Dar de Baja Activo</x-slot>
        <x-slot name="subtitulo"> </x-slot>
        <x-slot name="action">{{ route('activos.update', $activo->id) }}</x-slot> 
        <x-slot name="metodo">@method('put') </x-slot>
        
        <x-slot name="campos">

          Activo: 
          <label  class="block text-sm font-medium text-gray-700">
   
    
                        {{ $activo->producto->subcategoria->categoria->descripcion }} /
                        {{ $activo->producto->subcategoria->descripcion }} /
                        {{ $activo->producto->nombre }} /
                        {{ $activo->producto->marca }} /
                        {{ $activo->producto->modelo }}
                  {{$activo->serie }} - {{$activo->codigoactivo }} 
                  </label>
          <x-combo nombre="Estado" campo="estado_id" >
            <x-slot name="nombre">Estado</x-slot> 
            <x-slot name="campo">estado_id</x-slot> 
            <x-slot name="condicion">
                @foreach($estadostocks as $estadostock)
                      @if ($estadostock->descripcion ==  "DADO DE BAJA")
                            <option value = "{{ $estadostock->id}}" selected="selected"  >
                            {{ $estadostock->descripcion }} 
                            </option>
                      @endif 
                @endforeach
          </x-slot>
          </x-combo>
          

          


          <x-slot name="botones">
            <x-botonsubmit>Dar de baja</x-botonsubmit>
            <x-boton color="green" url="{{ route('activos.index')}}"> Volver </x-botonEditar>
          </x-slot>
        </x-slot>
    </x-crudform>


    
  </x-slot>
</x-master-layout>



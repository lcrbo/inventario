<x-master-layout>

   
<x-slot name="slot">
<x-contenttitulo>{{ 'Productos' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Modificar Producto</x-slot>
    <x-slot name="subtitulo"> [ {{$producto->nombre }} - {{$producto->marca }}  - {{$producto->modelo }}].</x-slot>
    <x-slot name="action">{{ route('productos.update', $producto->id) }}</x-slot> 
    <x-slot name="metodo">@method('put') </x-slot>
    
    <x-slot name="campos">

      <x-label>
            <x-slot name="nombre">Nombre</x-slot>
            <x-slot name="campo">nombre</x-slot>
            <x-slot name="valor">{{old('nombre',$producto->nombre)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Marca</x-slot>
            <x-slot name="campo">marca</x-slot>
            <x-slot name="valor">{{old('marca',$producto->marca)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Modelo</x-slot>
            <x-slot name="campo">modelo</x-slot>
            <x-slot name="valor">{{old('modelo',$producto->modelo)}}</x-slot>
      </x-label>
      
      <x-combo nombre="Categoria/Subcategoria" campo="subcategoria_id" >
        <x-slot name="nombre">Categoria/Subcategoria</x-slot>
        <x-slot name="campo">subcategoria_id</x-slot>
        <x-slot name="condicion">
                @foreach($subcategorias as $subcategoria)
                  <option value = "{{ $subcategoria->id}}" 
                    @if ($subcategoria->id  == $producto->subcategoria_id)
                      selected="selected"
                  @endif
                  >{{$subcategoria->categoria->descripcion}} - {{$subcategoria->descripcion}}
                </option>
                @endforeach
        </x-slot>
      </x-combo>

      <x-slot name="botones">
        <x-botonsubmit>Actualizar</x-botonsubmit>
        <x-boton color="green" url="{{ route('productos.index')}}"> volver </x-botonEditar>
      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>
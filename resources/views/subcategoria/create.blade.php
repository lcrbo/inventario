<x-master-layout>

  <x-slot name="slot">

    <x-contenttitulo>{{ 'Subcategoria' }}</x-contenttitulo>

    <x-crudform>
    <x-slot name="titulo">Agregar Subcategoria</x-slot>
    <x-slot name="subtitulo">Incorporar nueva Subcategoria.</x-slot>
    <x-slot name="action">{{route('subcategorias.store')}}</x-slot> 
    
    <x-slot name="campos">

    <x-label>
          <x-slot name="nombre">Descripción</x-slot> 
          <x-slot name="campo">descripcion</x-slot> 
          <x-slot name="valor">{{old('descripcion',$subcategoria->descripcion)}}</x-slot> 
    </x-label>
    <x-combo nombre="Categoria" campo="categoria_id" >
        <x-slot name="nombre">Categoria</x-slot> 
        <x-slot name="campo">categoria_id</x-slot> 

        <x-slot name="condicion">
                @foreach($categorias as $categoria)
                  <option value = "{{ $categoria->id}}" >{{$categoria->descripcion}} </option>
                @endforeach
        </x-slot>
      </x-combo>
      
      
      <x-slot name="botones">
            <x-botonsubmit>Actualizar</x-botonsubmit>
            <x-botonvolver>{{ route('subcategorias.index')}}</x-botonvolver>
          </x-slot>
    </x-slot>
    </x-crudform>


  
  </x-slot>
</x-master-layout>




<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Activos' }}</x-contenttitulo>


  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Activos' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
    <x-slot name="NuevoBoton">{{ 'Nuevo Activo' }}</x-slot>
    <x-slot name="UrlNuevoBoton">{{ route('activos.create') }}</x-slot>

    <x-slot name="thead">
     <!-- <x-crudthead>Id</x-crudthead>  -->
      <x-crudthead>ACTIVO </x-crudthead>
      <x-crudthead>NRO. SERIE</x-crudthead>
      <x-crudthead>CÓDIGO ACTIVO</x-crudthead>
      <x-crudthead>STOCK</x-crudthead>
      <x-crudthead>ESTADO</x-crudthead>
      <x-crudthead>OBSERVACIÓN</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
    @foreach ($activos as $activo)
        <tr>
         <!--  <x-crudtbody>{{ $activo->id }}</x-crudtbody> -->
          <x-crudtbody>
                    <a class="text-red-500 font-bold">{{ $activo->producto->subcategoria->categoria->descripcion }} / 
                    {{ $activo->producto->subcategoria->descripcion }} 
                    </a>
                     <p class="text-black-300 font-bold">
                    {{ $activo->producto->nombre }} </p>
                    <a class="text-black-300 font-bold">
                    {{ $activo->producto->marca }} /
                    {{ $activo->producto->modelo }} 
                    </a>
                    </x-crudtbody>
          
          <x-crudtbody>{{ $activo->serie }}</x-crudtbody>
          <x-crudtbody>{{ $activo->codigoactivo }}</x-crudtbody>
          <x-crudtbody>{{ $activo->stock }}</x-crudtbody>
          @if (  $activo->estadostock->descripcion  == 'DISPONIBLE')
            <x-crudtbody color="text-white" bcolor="bg-green-500" >
              <span class="badge badge-success">{{ $activo->estadostock->descripcion }}</span>
            </x-crudtbody>
          @elseif  (  $activo->estadostock->descripcion  == 'DADO DE BAJA')
            <x-crudtbody  color="text-white" bcolor="bg-red-500">
              <span class="badge badge-danger">{{ $activo->estadostock->descripcion }}</span>
            </x-crudtbody>
          @elseif  (  $activo->estadostock->descripcion  == 'EN REVISIÓN')
            <x-crudtbody  color="text-white" bcolor="bg-yellow-500">
              <span class="badge badge-warning">{{ $activo->estadostock->descripcion }}</span>
            </x-crudtbody>
          @else
          <x-crudtbody>{{ $activo->estadostock->descripcion }}</x-crudtbody>
          @endif
          <x-crudtbody>{{ $activo->obsevacion }}</x-crudtbody>

          
          <x-crudbotones>
             @if (  $activo->estadostock->descripcion  == 'DISPONIBLE')
            <a href="{{ route('activos.stock', $activo->id) }}" class="btn btn-success" role="button">Stock</a>
            <a href="{{ route('activos.edit', $activo->id) }}" class="btn btn-danger" role="button">Baja</a>
            <a href="{{ route('historialmovimientos.index', $activo->id) }}" class="btn btn-info">Historial</a>
            @else
            <a href="{{ route('historialmovimientos.index', $activo->id) }}" class="btn btn-info">Historial</a>
            @endif
            
            
            
          </x-crudbotones>
          
          
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $activos->links() !!}
    </x-slot>
  </x-crudlist>

</x-slot>
</x-master-layout>



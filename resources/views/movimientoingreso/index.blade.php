


<x-master-layout>

<x-slot name="slot">

<x-contenttitulo>{{ 'Activos Pendientes' }}</x-contenttitulo>

  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Activos Pendientes' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>
  

    <x-slot name="thead">
     <!-- <x-crudthead>Id</x-crudthead>  -->
      <x-crudthead>Activo</x-crudthead>
      <x-crudthead>ORDEN DE COMPRA</x-crudthead>

      <x-crudthead>DOCUMENTO</x-crudthead>
      <x-crudthead>NRO. SERIE</x-crudthead>
      <x-crudthead>CÓDIGO ACTIVO</x-crudthead>
      <x-crudthead>STOCK</x-crudthead>
      <x-crudthead>ESTADO</x-crudthead>
      <x-crudthead>OBSERVACIÓN</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($movimientoingresos as $movimientoingreso)
        <tr>
         
          <x-crudtbody>
                    <h1 class="text-red-500 font-bold">{{ $movimientoingreso->producto->subcategoria->categoria->descripcion }} / 
                    {{ $movimientoingreso->producto->subcategoria->descripcion }} 
                    </h1>
                    <p class="text-black-300 font-bold">
                    {{ $movimientoingreso->producto->nombre }} </p>
                    <a class="text-black-300 font-bold">
                    {{ $movimientoingreso->producto->marca }} /
                    {{ $movimientoingreso->producto->modelo }}
</a>
                    </x-crudtbody>
        <x-crudtbody>{{ $movimientoingreso->ordencompra }}</x-crudtbody>
        <x-crudtbody>{{ $movimientoingreso->tipodocumento->descripcion }} [{{ $movimientoingreso->numerodocumento }}]</x-crudtbody>
          <x-crudtbody>{{ $movimientoingreso->serie }}</x-crudtbody>
          <x-crudtbody>{{ $movimientoingreso->codigoactivo }}</x-crudtbody>
          <x-crudtbody>{{ $movimientoingreso->stock }}</x-crudtbody>
          
          <x-crudtbody>{{ $movimientoingreso->estadostock->descripcion }}</x-crudtbody>
          
          <x-crudtbody>{{ $movimientoingreso->obsevacion }}</x-crudtbody>

          
          <x-crudbotones>
            
            <x-boton color="red" url="{{ route('movimientoingresos.edit', $movimientoingreso->id) }}"> Revisión 
              <x-slot name="url">{{ route('movimientoingresos.edit', $movimientoingreso->id) }}</x-slot>
            </x-boton>
            
            
          </x-crudbotones>
          
          
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $movimientoingresos->links() !!}
    </x-slot>
  </x-crudlist>
  </x-slot>
</x-master-layout>

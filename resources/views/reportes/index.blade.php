<x-master-layout>

<x-slot name="slot">
<x-contenttitulo>{{ 'Reportes' }}</x-contenttitulo>


  <x-crudlist>
    <x-slot name="titulo">{{ 'Lista de Stock' }}</x-slot>
    <x-slot name="subtitulo"></x-slot>

    <x-slot name="report">barreport</x-slot>

    <x-slot name="thead">
     <!-- <x-crudthead>Id</x-crudthead>  -->
      <x-crudthead>ACTIVO </x-crudthead>
      <x-crudthead>NRO. SERIE</x-crudthead>
      <x-crudthead>CÓDIGO ACTIVO</x-crudthead>
      <x-crudthead>STOCK</x-crudthead>

      
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
          

          
         
          
          
        </tr>
        @endforeach
      
    </x-slot>
    <x-slot name="links">
      {!! $activos->links() !!}
    </x-slot>
  </x-crudlist>

</x-slot>
</x-master-layout>



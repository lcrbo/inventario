

<x-app-layout>

<x-slot name="slot">



  <x-crudlist>
    <x-slot name="titulo">{{ 'Historial Movimientos' }}</x-slot>
    <x-slot name="NuevoBoton">{{ 'Volver' }}</x-slot>
    
    <x-slot name="UrlNuevoBoton">{{ route('activos.index') }}</x-slot>
    <x-slot name="subtitulo">
      <div class ="text-xs font-bold">
        {{ $historialmovimientos->first()->activo->producto->subcategoria->categoria->descripcion }} / 
        {{ $historialmovimientos->first()->activo->producto->subcategoria->descripcion }} 
        </div>
        <div class ="text-xs font-bold text-red-500">
        {{ $historialmovimientos->first()->activo->producto->nombre }} /
        {{ $historialmovimientos->first()->activo->producto->marca }} /
        {{ $historialmovimientos->first()->activo->producto->modelo }}
        </div>
        <div class ="text-xs font-bold">
        Serie [{{ $historialmovimientos->first()->activo->serie }}] /
        Cod. Activo [{{ $historialmovimientos->first()->activo->codigoactivo }}] 
        </div>
    </x-slot>

   

    <x-slot name="thead">
     <!-- <x-crudthead>Id</x-crudthead>  -->
      
      <x-crudthead>TIPO MOVIMIENTO</x-crudthead>
      <x-crudthead>STOCK</x-crudthead>
      <x-crudthead>UBICACIÓN</x-crudthead>
      
      <x-crudthead>USUARIO</x-crudthead>
      <x-crudthead>ESTADO</x-crudthead>
      <x-crudthead>OBSERVACIÓN</x-crudthead>
      <x-crudthead>FECHA</x-crudthead>
    </x-slot>
    <x-slot name="tbody">
      
        @foreach ($historialmovimientos as $historialmovimiento)
        <tr>
         
          
           @if ($historialmovimiento->tipomovimiento == 1)
           <x-crudtbody>{{ 'Ingreso'  }}</x-crudtbody>
           @elseif ($historialmovimiento->tipomovimiento == 2)
           <x-crudtbody>{{ 'Modificación' }}</x-crudtbody>
           @else
            <x-crudtbody>{{ $historialmovimiento->tipomovimiento }}</x-crudtbody>
           @endif
            <x-crudtbody>{{ $historialmovimiento->stock }}</x-crudtbody>
            <x-crudtbody>{{ $historialmovimiento->ubicacion->descripcion }}</x-crudtbody>
            <x-crudtbody>{{ $historialmovimiento->user->name }}</x-crudtbody>
            <x-crudtbody>{{ $historialmovimiento->estadostock->descripcion }}</x-crudtbody>
            <x-crudtbody>{{ $historialmovimiento->observacion }}</x-crudtbody>
            <x-crudtbody>{{ $historialmovimiento->updated_at }}</x-crudtbody>
          

          

          
          
        </tr>
        @endforeach
      
    </x-slot>



    <x-slot name="links">
      {!! $historialmovimientos->links() !!}
    </x-slot>
  </x-crudlist>

</x-app-layout>


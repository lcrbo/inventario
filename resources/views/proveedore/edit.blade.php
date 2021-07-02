<x-master-layout>

   
<x-slot name="slot">

<x-crudform>
    <x-slot name="titulo">Modificar Proveedores</x-slot>
    <x-slot name="subtitulo">Proveedor [ {{$proveedore->razonsocial }} ].</x-slot>
    <x-slot name="action">{{ route('proveedores.update', $proveedore->id) }}</x-slot> 
    <x-slot name="metodo">@method('put') </x-slot>
    
    <x-slot name="campos">

      
      <x-label>
            <x-slot name="nombre">Rut</x-slot>
            <x-slot name="campo">rut</x-slot>
            <x-slot name="valor">{{old('rut',$proveedore->rut)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Razón Social</x-slot>
            <x-slot name="campo">razonsocial</x-slot>
            <x-slot name="valor">{{old('razonsocial',$proveedore->razonsocial)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Nombre del Contacto</x-slot>
            <x-slot name="campo">nombrecontacto</x-slot>
            <x-slot name="valor">{{old('nombrecontacto',$proveedore->nombrecontacto)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Teléfono</x-slot>
            <x-slot name="campo">telefono</x-slot>
            <x-slot name="valor">{{old('telefono',$proveedore->telefono)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Correo</x-slot>
            <x-slot name="campo">correo</x-slot>
            <x-slot name="valor">{{old('correo',$proveedore->correo)}}</x-slot>
      </x-label>
      <x-label>
            <x-slot name="nombre">Dirección</x-slot>
            <x-slot name="campo">direccion</x-slot>
            <x-slot name="valor">{{old('direccion',$proveedore->direccion)}}</x-slot>
      </x-label>

      <x-slot name="botones">
        <x-botonsubmit>Actualizar</x-botonsubmit>
        <x-boton color="green" url="{{ route('proveedores.index')}}"> Volver </x-botonEditar>
      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>




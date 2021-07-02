
<x-master-layout>

<x-slot name="slot">

  <x-contenttitulo>{{ 'Crear - Bulto' }}</x-contenttitulo>

  <x-crudform>
      <x-slot name="titulo">Incorporar nueva Bulto</x-slot>
      <x-slot name="subtitulo"></x-slot>
      <x-slot name="action">{{route('bulto.store')}}</x-slot> 
      
      <x-slot name="campos">

      <x-label>
        <x-slot name="nombre">Codigo Bulto</x-slot> 
        <x-slot name="campo">codigobulto</x-slot> 
        <x-slot name="valor">{{old('codigobulto',$bulto->codigobulto)}}</x-slot> 
      </x-label>

      <x-label>
        <x-slot name="nombre">Descripcion</x-slot> 
        <x-slot name="campo">descripcion</x-slot> 
        <x-slot name="valor">{{old('descripcion',$bulto->descripcion)}}</x-slot> 
      </x-label>

      <x-label>
        <x-slot name="nombre">Fecha</x-slot> 
        <x-slot name="campo">fecha</x-slot> 
        <x-slot name="valor">{{old('fecha',$bulto->fecha)}}</x-slot> 
      </x-label>
      
        
        <x-slot name="botones">
          <x-botonsubmit>Actualizar</x-botonsubmit>
          <x-botonvolver>{{ route('bulto.index')}}</x-botonvolver>
        </x-slot>
      </x-slot>
  </x-crudform>

</x-slot>
</x-master-layout>



@extends('layouts.app')


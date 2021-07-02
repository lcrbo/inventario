<x-master-layout>
   
<x-slot name="slot">
  <x-contenttitulo>{{ 'Categorias' }}</x-contenttitulo>
<x-crudform>
    <x-slot name="titulo">Modificar Categoria</x-slot>
    <x-slot name="subtitulo">[ {{$categoria->descripcion }} ].</x-slot>
    <x-slot name="action">{{ route('categorias.update', $categoria->id) }}</x-slot> 
    <x-slot name="metodo">@method('put') </x-slot>
    
    <x-slot name="campos">

        <x-label>
            <x-slot name="nombre">Descripción Categoria</x-slot>
            <x-slot name="campo">descripcion</x-slot>
            <x-slot name="valor">{{old('descripcion',$categoria->descripcion)}}</x-slot>
          </x-label>
          <div class="blue">
         
                            <img src="{{ asset('img/rag_values.png') }}" style="clear:both;display:block;margin:0 0 3px 34px" />
                            <input data-type="RAG" id="RagValues0" name="RagValues0" style="width:70px;margin-right:20px;text-align:right" tabindex="20" type="text"
                                   v-on:blur="ragBlur(0)" :value="ragValue(0)">
                            <input data-type="RAG" id="RagValues1" name="RagValues1" style="width:70px;margin-right:20px;text-align:right" tabindex="21" type="text"
                                   v-on:blur="ragBlur(1)" :value="ragValue(1)">
                            <input data-type="RAG" id="RagValues2" name="RagValues2" style="width:70px;margin-right:20px;text-align:right" tabindex="22" type="text"
                                   v-on:blur="ragBlur(2)" :value="ragValue(2)">
                            <input data-type="Rag" id="RagValues3" name="RagValues3" style="width:70px;text-align:right" tabindex="23" type="text"
                                   v-on:blur="ragBlur(3)" :value="ragValue(3)">



                        </div>
      <x-slot name="botones">
        <x-botonsubmit>{{ 'Actualizar' }} </x-botonsubmit>
        <x-botonvolver>{{ route('categorias.index')}}</x-botonvolver>

      </x-slot>
    </x-slot>
</x-crudform>


  
  </x-slot>
</x-master-layout>
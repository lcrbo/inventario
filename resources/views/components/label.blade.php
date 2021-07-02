<div>
    <label for="{{$campo}}" class="block text-sm font-medium text-gray-700">
    {{$nombre}}
    </label>
    <div class="mt-1">
    <!-- <input id="{{$campo}}" name={{$campo}} type="text"" 
      class="px-4 py-2 border focus:ring-gray-500 focus:border-red-900 w-full sm:text-sm border-red-300 rounded-md focus:outline-none text-gray-600"            
         placeholder="" value="{{$valor}}">
         </input> -->
         <input type="{{$campo}}" name="{{$campo}}" class="form-control" id="{{$campo}}" placeholder="" value="{{$valor}}">
    </div>
    @error($campo)
        <small class="text-red-500">* {{$message}}.</small>
    @enderror
</div>
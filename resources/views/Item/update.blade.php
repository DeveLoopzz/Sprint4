
<x-app-layout>

        <form action="/items/{{$item->id}}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="nombre" value= "{{$item->nombre}}"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"required />
                <label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
            </div>
            <div>
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                <textarea name="descripcion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$item->descripcion}}</textarea>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rareza</label>
                <select name="rareza"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($rarezas as $rareza)
                    <option value="{{$rareza}}" {{$rareza == $item->rareza ? 'selected' : ''}}>{{ucfirst($rareza)}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metodo Obtencion</label>
                <select name="metodo_obtencion"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($metodosObtencion as $metodo)
                    <option value="{{$metodo}}" {{$metodo == $item->metodo_obtencion ? 'selected' : ''}}>{{ucfirst($metodo)}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
          
    {{-- <form action="/items/{{$item->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <input type="text" name="nombre" value= "{{$item->nombre}}">
        </label>
        <label>
            Descripción:
            <textarea name="descripcion"> {{$item->descripcion}}</textarea>
        </label>
        <label>
            Metodo de obtención:
            <select name="metodo_obtencion">
                @foreach ($metodosObtencion as $metodo)
                    <option value="{{$metodo}}" {{$metodo == $item->metodo_obtencion ? 'selected' : ''}}>{{ucfirst($metodo)}}</option>
                @endforeach
            </select>
        </label>
        <label>
            Rareza:
            <select name="rareza" value="{{$item->rareza}}">
                @foreach ($rarezas as $rareza)
                    <option value="{{$rareza}}" {{$rareza == $item->rareza ? 'selected' : ''}}>{{ucfirst($rareza)}}</option>
                @endforeach
            </select>
        </label>

        <button type="submit">
            Update Item
        </button>
    </form> --}}

</x-app-layout>


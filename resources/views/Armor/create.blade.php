<x-app-layout>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/armors" method="POST" class="max-w-md mx-auto">
        @csrf
        <div>
                Nombre:
            <input type="text" name="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('nombre') }}"/>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item 1</label>
                    <select name="item_1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">                
                        @foreach ($itemList as $item)
                            <option value="{{$item->id}}">{{ucfirst($item->nombre)}}</option>
                        @endforeach
                    </select>
            </div>
            <div>
                    Cantidad:
                    <input type="number" name="quantity_1" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('quantity_1') }}">
                </label>
            </div>    
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item 2</label>
                <select name="item_2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">                
                    @foreach ($itemList as $item)
                        <option value="{{$item->id}}">{{ucfirst($item->nombre)}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                    Cantidad:
                    <input type="number" name="quantity_2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('quantity_1') }}">
                </label>
            </div>    

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item 3</label>
                <select name="item_3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">                
                    @foreach ($itemList as $item)
                        <option value="{{$item->id}}">{{ucfirst($item->nombre)}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                    Cantidad:
                    <input type="number" name="quantity_3" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('quantity_1') }}">
                </label>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item 4</label>
                <select name="item_4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">                
                    @foreach ($itemList as $item)
                        <option value="{{$item->id}}">{{ucfirst($item->nombre)}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                    Cantidad:
                    <input type="number" name="quantity_4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('quantity_1') }}">
                </label>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rareza</label>
                <select name="rareza" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($armorRarity as $rareza)
                        <option value="{{$rareza}}">{{ucfirst($rareza)}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
                <select name="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($armorType as $Type)
                        <option value="{{$Type}}">{{ucfirst($Type)}}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                Armadura:
            <input type="text" name="armadura" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('armadura') }}"/>
            </div>
        <div class="relative z-0 w-full mb-5 group">
            Resistencia fuego:
        <input type="text" name="res_fuego" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('res_fuego') }}"/>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            Resistencia agua:
        <input type="text" name="res_agua" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('res_agua') }}"/>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            Resistencia rayo:
        <input type="text" name="res_rayo" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('res_rayo') }}"/>
        </div>
        <label>
            <div class="relative z-0 w-full mb-5 group">
                Resistencia hielo:
            <input type="text" name="res_hielo" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('res_hielo') }}"/>
            </div>
        </label>
        <div class="relative z-0 w-full mb-5 group">
            Resistencia draco:
        <input type="text" name="res_draco" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ old('res_draco') }}"/>
        </div>
    </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
    </form>
</x-app-layout>
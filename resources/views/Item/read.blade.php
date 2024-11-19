<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="grid grid-cols-2 gap-8">
          @foreach ($itemList as $item)
            <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->nombre }}</h5>
              <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->descripcion }}</p>
              <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->metodo_obtencion }}</p>
              <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->rareza }}</p>
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button" onclick="window.location.href='/items/update/{{$item->id}}'" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                Update
                </button>
                <form action="/items/{{$item->id}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este item?');">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                Delete
                </button>
                </form>
            </div>
            </a>
          @endforeach
            <a href="/items/create" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Create Item </h5>
            </a>
        </div>
      </div>
      
        {{-- <div class= "tarjeta" style="border: 2px solid black;">
            <h3>
                {{$item->nombre}}
            </h3>
            <p>
                {{$item->descripcion}}
            </p>
            <p>
                {{$item->metodo_obtencion}}
            </p>
            <p>
                {{$item->rareza}}
            </p>
            <a href="/items/update/{{$item->id}}">
                <p>
                    update
                </p>
            </a>
            <a href="/items/delete/{{$item->id}}">
                <p>
                    delete
                </p>
            </a>
        </div>
        @endforeach
        <div class="tarjeta" style="border: 2px solid black;">
            <a href="/items/create">
                <h3>Create new item</h3>
            </a>
        </div> --}}
</x-app-layout>

<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="grid grid-cols-2 gap-8">
    @foreach ($armors as $armor)
    <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{$armor->nombre}}
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{$armor->rareza}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{$armor->tipo}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Armadura: {{$armor->armadura}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Resistencia fuego: {{$armor->res_fuego}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Resistencia agua: {{$armor->res_agua}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Resistencia Rayo: {{$armor->res_rayo}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Resistencia hielo: {{$armor->res_hielo}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Resistencia draco: {{$armor->res_draco}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
               Socket 1: {{$armor->socket_1}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Socket 2: {{$armor->socket_2}}
            </p>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                Socket 3: {{$armor->socket_3}}
            </p>
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button" onclick="window.location.href='/armors/update/{{$armor->id}}'" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                Update
                </button>
                <form action="/armors/{{$armor->id}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este item?');">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                Delete
                </button>
                </form>
            </div>
    </a>
    @endforeach
    <a href="/armors/create"class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Create new Armor</h3>
    </a>
</div>
</div>
</x-app-layout>
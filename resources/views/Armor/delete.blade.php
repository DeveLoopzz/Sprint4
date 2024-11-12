<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class= "tarjeta" style="border: 2px solid black;">
        <h3>
            {{$armor->nombre}}
        </h3>
        <p>
            {{$armor->rareza}}
        </p>
        <p>
            {{$armor->tipo}}
        </p>
        <p>
            Armadura: {{$armor->armadura}}
        </p>
        <p>
            Resistencia fuego: {{$armor->res_fuego}}
        </p>
        <p>
            Resistencia agua: {{$armor->res_agua}}
        </p>
        <p>
            Resistencia Rayo: {{$armor->res_rayo}}
        </p>
        <p>
            Resistencia hielo: {{$armor->res_hielo}}
        </p>
        <p>
            Resistencia draco: {{$armor->res_draco}}
        </p>
        <p>
           Socket 1: {{$armor->socket_1}}
        </p>
        <p>
            Socket 2: {{$armor->socket_2}}
        </p>
        <p>
            Socket 3: {{$armor->socket_3}}
        </p>
        <form action="/armors/{{$armor->id}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este item?');">
            @csrf
            @method('DELETE')
            <button type="submit">Confirm Delete</button>
        </form>
    
        <!-- Botón para Cancelar y volver al listado -->
        <button>
            <a href="/armors">Cancel Delete</a>
        </button>
    </div>
</body>
</html>
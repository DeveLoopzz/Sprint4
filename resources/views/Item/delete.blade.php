<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Aqui va la vista del delete item</h1>
    <div class= "tarjeta" style="border: 2px solid black;">
        <a href="/items/delete/{{$item->id}}">
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
        </a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body> 
    <h1>Formulario creacion item</h1>

    <form action="/items" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        <label>
            Descripción:
            <textarea name="descripcion"></textarea>
        </label>
        <label>
            Metodo de obtención:
            <select name="metodo_obtencion">
                @foreach ($metodosObtencion as $metodo)
                    <option value="{{$metodo}}">{{ucfirst($metodo)}}</option>
                @endforeach
            </select>
        </label>
        <label>
            Rareza:
            <select name="rareza">
                @foreach ($rarezas as $rareza)
                    <option value="{{$rareza}}">{{ucfirst($rareza)}}</option>
                @endforeach
            </select>
        </label>

        <button type="submit">
            Create Item
        </button>
    </form>
</body>
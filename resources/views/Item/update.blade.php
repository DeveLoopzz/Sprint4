<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Aqui va la vista del update item</h1>
    <form action="/items/{{$item->id}}" method="POST">
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
    </form>
</body>
</html>

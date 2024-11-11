<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/armors" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombre">
        </label>
        <label>
            Rareza:
            <select name="rareza">
                @foreach ($armorRarity as $rareza)
                    <option value="{{$rareza}}">{{ucfirst($rareza)}}</option>
                @endforeach
            </select>
        </label>
        <label>
            Tipo:
            <select name="tipo">
                @foreach ($armorType as $type)
                    <option value="{{$type}}">{{ucfirst($type)}}</option>
                @endforeach
            </select>
        </label>
        <label>
            Armadura:
            <input type="text" name="armadura">
        </label>
        <label>
            Resistencia fuego:
            <input type="text" name="res_fuego">
        </label>
        <label>
            Resistencia agua:
            <input type="text" name="res_agua">
        </label>
        <label>
            Resistencia rayo:
            <input type="text" name="res_rayo">
        </label>
        <label>
            Resistencia hielo:
            <input type="text" name="res_hielo">
        </label>
        <label>
            Resistencia draco:
            <input type="text" name="res_draco">
        </label>

        <button type="submit">
            Create Armor
        </button>
    </form>
</body>
</html>
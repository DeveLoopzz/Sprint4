<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/armors/{{$armor->id}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <input type="text" name="nombre" value="{{$armor->nombre}}">
        </label>
        <br>
        <label>
            Item 1:
            <select name="item_1">
                @foreach ($itemList as $item)
                    <option value="{{ $item->id }}" 
                        @if ($armor->items->contains('id', $item->id)) selected @endif>
                        {{ ucfirst($item->nombre) }}
                    </option>
                @endforeach
            </select>
            <input type="number" name="quantity_1">
        </label>
        <br>
        <label>
            <label>
                Item 2:
                <select name="item_2">
                    @foreach ($itemList as $item)
                        <option value="{{ $item->id }}" 
                            @if ($armor->items->contains('id', $item->id)) selected @endif>
                            {{ ucfirst($item->nombre) }}
                        </option>
                    @endforeach
                </select>
                <input type="number" name="quantity_2">
            </label>
        <br>
        <label>
            Item 3:
            <select name="item_3">
                @foreach ($itemList as $item)
                    <option value="{{ $item->id }}" 
                        @if ($armor->items->contains('id', $item->id)) selected @endif>
                        {{ ucfirst($item->nombre) }}
                    </option>
                @endforeach
            </select>
            <input type="number" name="quantity_3">
        <br>
        <label>
            Item 4:
            <select name="item_4">
                @foreach ($itemList as $item)
                    <option value="{{ $item->id }}" 
                        @if ($armor->items->contains('id', $item->id)) selected @endif>
                        {{ ucfirst($item->nombre) }}
                    </option>
                @endforeach
            </select>
            <input type="number" name="quantity_4">
        </label>
        <br>
        <label>
            Rareza:
            <select name="rareza">
                @foreach ($armorRarity as $rareza)
                    <option value="{{$rareza}}" @if ($rareza == $armor->rareza) selected @endif>{{ucfirst($rareza)}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <label>
            Tipo:
            <select name="tipo">
                @foreach ($armorType as $type)
                    <option value="{{$type}}" @if($type == $armor->tipo) selected @endif>{{ucfirst($type)}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <label>
            Armadura:
            <input type="text" name="armadura" value="{{$armor->armadura}}">
        </label>
        <br>
        <label>
            Resistencia fuego:
            <input type="text" name="res_fuego" value="{{$armor->res_fuego}}">
        </label>
        <br>
        <label>
            Resistencia agua:
            <input type="text" name="res_agua" value="{{$armor->res_agua}}">
        </label>
        <br>
        <label>
            Resistencia rayo:
            <input type="text" name="res_rayo" value="{{$armor->res_rayo}}">
        </label>
        <br>
        <label>
            Resistencia hielo:
            <input type="text" name="res_hielo" value="{{$armor->res_hielo}}">
        </label>
        <br>
        <label>
            Resistencia draco:
            <input type="text" name="res_draco" value="{{$armor->res_draco}}">
        </label>
        <br>

        <button type="submit">
            Update Armor
        </button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
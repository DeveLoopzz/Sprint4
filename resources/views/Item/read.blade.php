<!DOCTYPE html>

<body>
        @foreach ($itemList as $item)
        <div class= "tarjeta" style="border: 2px solid black;">
            <a href="/items/update/{{$item->id}}">
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
        <div>
            <div>
        </div>
        @endforeach
</body>    

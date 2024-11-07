<!DOCTYPE html>

<h1>Aqui va la vista del create item</h1>

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
            <select>
                @foreach ($rareza as $rarezas)
                    <option value="{{$rarezas}}"> {{ucfirst($rarezas)}}</option>
                @endforeach
            </select>
        </label>

        <button type="submit">
            Create Item
        </button>
    </form>
</body>
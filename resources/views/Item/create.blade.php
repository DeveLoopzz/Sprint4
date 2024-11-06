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
            <input type="text" name="metodo_obtencion">
        </label>
        <label>
            Rareza:
            <input type="text" name="rareza">
        </label>

        <button type="submit">
            Create Item
        </button>
    </form>
</body>
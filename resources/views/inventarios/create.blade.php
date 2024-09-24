<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inventario</title>
</head>

<body>
    <h1 class="text-center">INVENTARIO</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('iventarios.store')}}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="number" class="form-control mb-3" placeholder="Cantidad" name="cantidad"
                    value="{{ old('cantidad') }}">
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <label for="">Fecha de Ingreso</label>
                <input type="date" class="form-control mb-3" name="fechaIngreso" value="{{ old('fechaIngreso') }}">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>

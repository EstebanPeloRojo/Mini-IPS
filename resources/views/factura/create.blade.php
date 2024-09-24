<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Facturas</title>
</head>

<body>
    <h1 class="text-center">Facturacion</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('factura.store')}}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Tipo de Servicio" name="tipoServicio"
                    value="{{ old('tipoServicio') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <label for="">Fecha de Creacion</label>
                <input type="date" class="form-control mb-3" name="fechaElaboracionFactura"
                    value="{{ old('fechaElaboracionFactura') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-select mb-3" name="estado" id="estado">
                    <option value="">Estado</option>
                    <option value="vigente">Vigente</option>
                    <option value="expirado">Expirado</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-select mb-3" name="tipoDoc" id="">
                    <option value="">Tipo de Documento</option>
                    <option value="cedula">Cedula de ciudadania</option>
                    <option value="tarjeta">Tarjeta de identidad</option>
                    <option value="extranjera">Documento de extranjero</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">

                <input type="text" class="form-control mb-3" placeholder="N° Documento" name="numDoc"
                    value="{{ old('numDoc') }}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">

                <input type="number" class="form-control mb-3" placeholder="Total de Costo" name="totalDinero"
                    value="{{ old('totalDinero') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">

                <input type="number" class="form-control mb-3" placeholder="Total de Cantidad" name="totalCantidad"
                    value="{{ old('totalCantidad') }}">
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Biologicos</title>
</head>

<body>
    <h1 class="text-center">Biologicos</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese Nombre de biologico" name="nombre_bio"
                    value="{{ old('nombre_bio') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese el codigo" name="cod_bio"
                    value="{{ old('cod_bio') }}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Cantidad" name="cantidad"
                    value="{{ old('cantidad') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-select" name="tipo_bio" id="tipo_bio">
                    <option value="">Tipo de biologico</option>
                    <option value="inactivas">Vivas Inactivas</option>
                    <option value="combinadas">Combinadas</option>
                    <option value="toxoides">Toxoides</option>
                    <option value="ARN">ARN</option>
                    <option value="vectores">Vectores virales</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="number" class="form-control mb-3" placeholder="Precio" name="precio"
                    value="{{ old('precio') }}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-select" name="presentacion" id="presentacion">
                    <option value="">Presentacion</option>
                    <option value="inyeccion">Inyeccion</option>
                    <option value="liquido">Liquido</option>
                    <option value="pastillas">Pastilla</option>
                    <option value="aerosol">Aerosol</option>
                </select>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Marca" name="marca"
                    value="{{ old('marca') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Laboratorio de creacion" name="marca"
                    value="{{ old('laboratorio') }}">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <label for="">Fecha de expiracion</label>
                <input type="date" class="form-control mb-3" name="fecha_expiracion"
                    value="{{ old('fecha_expiracion') }}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="number" class="form-control mb-3" placeholder="N° de lote" name="lote"
                    value="{{ old('lote') }}">
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
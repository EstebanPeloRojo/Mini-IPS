<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>usuario</title>
</head>

<body>
    <h1 class="text-center">REGISTRO DE USUARIO</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese su nombre" name="nombre"
                    value="{{ old('nombre') }}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese apellido" name="apellido"
                    value="{{ old('apellido')}}">
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
                <input type="number" class="form-control mb-3" placeholder="Ingrese N° documento" name="numDoc"
                    value="{{old('numDoc')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese E-mail" name="email"
                    value="{{old('email')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese pais" name="pais"
                    value="{{old('pais')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-select mb-3" name="rol" id="">
                    <option value="">Escoja un rol</option>
                    <option value="administracion">Administracion</option>
                    <option value="facturacion">Facturacion</option>
                    <option value="auxiliar">Auxiliar</option>
                    <option value="paciente">Paciente</option>
                </select>
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

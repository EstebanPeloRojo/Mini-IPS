<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pacientes</title>
</head>

<body>
    <div class="text-center">
        <h1>CONTROL</h1>
    </div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('pacientes.store')}}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Nombre de paciente" name="nombre"
                    value="{{old('nombre')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Apellido" name="apellido"
                    value="{{old('apellido')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-select mb-3" name="Tipo_Doc" id="">
                    <option value="">Tipo de Documento</option>
                    <option value="cedula">Cedula de ciudadania</option>
                    <option value="identidad">Tarjeta de identidad</option>
                    <option value="extranjero">Documento de extranjero</option>
                </select>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="number" class="form-control mb-3" placeholder="Documento de Paciente " name="Num_Doc"
                    value="{{old('Num_Doc')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <label for="">Fecha de nacimiento</label>
                <input type="date" class="form-control mb-3" name="fecha_nacimiento"
                    value="{{old('fecha_nacimiento')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Ingrese E-mail" name="Email"
                    value="{{old('Email')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Tipo de sagre" name="tipo_sangre"
                    value="{{old('tipo_sangre')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <label for="">Fecha de expedicion de documento</label>
                <input type="date" class="form-control mb-3" name="fecha_exp_doc" value="{{old('fecha_exp_doc')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <input type="text" class="form-control mb-3" placeholder="Alergias" name="alergias"
                    value="{{old('alergias')}}">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-control mb-3" name="sexo" id="sexo">
                    <option value="">Seleccione sexo</option>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                </select>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <select class="form-control mb-3 " name="genero" id="genero">
                    <option value="">Seleccione Genero</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
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

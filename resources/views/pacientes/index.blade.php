<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">


        <a href="{{ route('pacientes.new') }}" class="btn btn-success">Nuevo</a>

        <thead>
            <th>
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                Tipo Documento
            </th>
            <th>
                Numero Documento
            </th>
            <th>
                Nacimiento
            </th>
            <th>
                Correo
            </th>
            <th>
                Tipo de sangre
            </th>
            <th>
                Fecha Expedicion
            </th>
            <th>
                Alergias
            </th>
            <th>
                Sexo
            </th>
            <th>
                Genero
            </th>

        </thead>
        @foreach($datos as $paciente)
            <tr>
                <td>
                    {{ $paciente->nombre }}
                </td>
                <td>
                    {{ $paciente->apellido }}
                </td>
                <td>
                    {{ $paciente->Tipo_Doc }}
                </td>
                <td>
                    {{ $paciente->Num_Doc }}
                </td>
                <td>
                    {{ $paciente->fecha_nacimiento }}
                </td>
                <td>
                    {{ $paciente->Email }}
                </td>
                <td>
                    {{ $paciente->tipo_sangre}}
                </td>
                <td>
                    {{ $paciente->fecha_exp_doc}}
                </td>
                <td>
                    {{ $paciente->alergias}}
                </td>
                <td>
                    {{ $paciente->sexo}}
                </td>
                <td>
                    {{ $paciente->genero}}
                </td>
                <td>


                    @method('delete')
                    @csrf

                    </form>
                </td>
            </tr>
        @endforeach()
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>

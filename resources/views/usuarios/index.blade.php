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
        <a href="{{ route('usuarios.create') }}" class="btn btn-success">Nuevo</a>


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
                Correo
            </th>
            <th>
                Pais
            </th>
            <th>
                Rol
            </th>
            <th colspan="2">
                Acciones
            </th>
        </thead>
        @foreach($datos as $usuario)
            <tr>
                <td>
                    {{ $usuario->nombre }}
                </td>
                <td>
                    {{ $usuario->apellido }}
                </td>
                <td>
                    {{ $usuario->tipoDoc }}
                </td>
                <td>
                    {{ $usuario->numDoc }}
                </td>
                <td>
                    {{ $usuario->email }}
                </td>
                <td>
                    {{ $usuario->pais }}
                </td>
                <td>
                    {{ $usuario->rol}}
                </td>
                <td>

                    <a href="{{ route('usuarios.edit', $usuario->id) }}"><img src="{{ url('img/icons8-editar-50.png') }}"
                            width="30"></a>

                </td>

                <td>
                    <a href="javascript:document.getElementById('delete-{{$usuario->id }}').submit()"
                        onclick="return confirm('Realmente quiere eliminar el registro?')">
                        <img src="{{url('img/icons8-eliminar-50.png')}}" height="30"></a>
                    <form id="delete-{{$usuario->id}}" action="{{route('usuarios.destroy', $usuario->id)}}" method="POST">
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

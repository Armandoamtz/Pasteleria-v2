<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="borded">

    <div class="container d-flex justify-content-between">
        <div>
            <a href="{{ url('pasteleria/create') }}" target="_blank" class="btn btn-primary">Registrar nuevo pedido</a><br><br>
        </div>

        <div><p class="text-success text-uppercase fw-bold">
             @if(Session::has('mensaje'))
                 {{ Session::get('mensaje') }}
             @endif
        </p></div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr class="text-uppercase text-center">
                    <th>id</th>
                    <th>nombre</th>
                    <th>dirección</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>fecha</th>
                    <th>descripción</th>
                    <th>sabores</th>
                    <th>decoración</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasteleria as $pastel)

                <!--DATOS-->
                <tr>
                    <td>{{ $pastel->id }}</td>
                    <td>{{ $pastel->nombre }}</td>
                    <td>{{ $pastel->direccion }}</td>
                    <td>{{ $pastel->email }}</td>
                    <td>{{ $pastel->telefono }}</td>
                    <td>{{ $pastel->fecha }}</td>
                    <td>{{ $pastel->descripcion }}</td>

                    <!--SABORES-->
                    <td>
                        {{ $pastel->pastelAleman }}
                        {{ $pastel->pastelCapuchino }}
                        {{ $pastel->pastelTresLeches }}
                        {{ $pastel->pastelQueso }}
                        {{ $pastel->pastelAmericano }}
                        {{ $pastel->pastelMoka }}
                        {{ $pastel->pastelFrutas }}
                        {{ $pastel->pastelCarlos }}
                    </td>

                    <!--DECORACIÓN-->
                    <td>
                        {{ $pastel->decoracionGeometrica }}
                        {{ $pastel->decoracionDripCake }}
                        {{ $pastel->decoracionVelaTradicional }}
                        {{ $pastel->decoracionVelaNumerica }}
                    </td>

                    <!--ACCIONES-->
                    <td class="d-flex justify-content-around">
                        <a href="{{ url('/pasteleria/'.$pastel->id.'/edit') }}" class="btn btn-warning">Editar</a>
                        <form action="{{ url('/pasteleria/'.$pastel->id) }}" class="d-inline-flex" method="post">
                            @csrf
                            {{ method_field('DELETE') }}                            
                            <input type="submit" onclick="return confirm('¿Quieres borrar el pedido?')" value="Borrar" class="btn btn-danger">                            
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $pasteleria->links() !!}
    </div>
</div>
@endsection
</body>
</html>
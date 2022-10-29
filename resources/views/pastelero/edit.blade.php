<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedidos</title>
</head>
<body>
@extends('layouts.app')
@section('content')

<form action="{{ url('/pasteleria/'.$pastel->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
    <div class="container border border-primary shadow-lg p-3 mb-5 bg-body rounded">
        <br>
        <div class="container">
            <h2 class="text-center text-uppercase text-primary fw-bold">datos</h2>
            <div class="d-flex justify-content-around flex-wrap">
                <div>
                    <label for="nombre" class="text-capitalize">nombre completo:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ isset($pastel->nombre)?$pastel->nombre:'' }}" required>
                </div>
                <div>
                    <label for="direccion" class="text-capitalize">dirección:</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" value="{{ isset($pastel->direccion)?$pastel->direccion:'' }}"required>
                </div>
                <div>
                    <label for="email" class="text-capitalize">correo electronico:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ isset($pastel->email)?$pastel->email:'' }}" required>
                </div>
                <div>
                    <label for="telefono" class="text-capitalize">telefono:</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" value="{{ isset($pastel->telefono)?$pastel->telefono:'' }}" required>
                </div>
                <div>
                    <label for="fecha" class="text-capitalize">fecha de entrega:</label>
                    <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="{{ isset($pastel->fecha)?$pastel->fecha:'' }}" required>
                </div>
                <div>
                    <label for="descripcion" class="text-capitalize">describe tu pastel. ¿de 1,2,3 pisos?:</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <!--Sabores-->
            <br>
            <h2 class="text-center text-uppercase text-primary fw-bold">sabores</h2>
            <div class="d-flex justify-content-around">
                <div>
                    <label for="aleman" class="text-capitalize">aleman</label>
                    <input type="checkbox" name="pastelAleman" id="aleman" value="{{ isset($pastel->pastelAleman)?$pastel->pastelAleman:'' }}">
                </div>
                <div>
                    <label for="capuchino" class="text-capitalize">capuchino</label>
                    <input type="checkbox" name="pastelCapuchino" id="capuchino" value="capuchino">
                </div>
                <div>
                    <label for="leches" class="text-capitalize">tres leches</label>
                    <input type="checkbox" name="pastelTresLeches" id="leches" value="tres-leches">
                </div>
                <div>
                    <label for="queso">queso</label>
                    <input type="checkbox" name="pastelQueso" id="queso" value="queso">
                </div>
                <div>
                    <label for="americano" class="text-capitalize">americano</label>
                    <input type="checkbox" name="pastelAmericano" id="americano" value="americano">
                </div>
                <div>
                    <label for="moka" class="text-capitalize">moka</label>
                    <input type="checkbox" name="pastelMoka" id="moka" value="moka">
                </div>
                <div>
                    <label for="frutas" class="text-capitalize">frutas</label>
                    <input type="checkbox" name="pastelFrutas" id="frutas" value="frutas">
                </div>
                <div>
                    <label for="carlosv" class="text-capitalize">carlosv</label>
                    <input type="checkbox" name="pastelCarlos" id="carlosv" value="carlosV">
                </div>
            </div>

            <!--Decoración-->
            <br>
            <h3 class="text-center text-uppercase text-primary fw-bold">adornos</h3>
            <div class="d-flex justify-content-around">
                <div>
                    <label for="geometrica" class="text-capitalize">geometrica</label>
                    <input type="checkbox" name="decoracionGeometrica" id="geometrica" value="geometrica">
                </div>
                <div>
                    <label for="drip-cake" class="text-capitalize">drip cake</label>
                    <input type="checkbox" name="decoracionDripCake" id="drip-cake" value="drip-cake">
                 </div>
                 <div>
                    <label for="tradicional" class="text-capitalize">vela tradicional</label>
                    <input type="checkbox" name="decoracionVelaTradicional" id="tradicional" value="vela-tradicional">
                </div>
                <div>
                    <label for="numerica" class="text-capitalize">vela numerica</label>
                    <input type="checkbox" name="decoracionVelaNumerica" id="numerica" value="vela-numerica">
                </div>
            </div>


            <br>
            <div class="d-flex justify-content-center">
                <div class="d-flex justify-content-around" style="width: 35%">
                    <div>
                        <a href="{{ url('/pasteleria/') }}" class="btn btn-primary text-uppercase fw-bold">regresar</a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success text-uppercase fw-bold">enviar</button>
                    </div>
                    <div>
                        <button type="reset" class="btn btn-danger text-uppercase fw-bold">borrar</button>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</form>
@endsection
</body>
</html>

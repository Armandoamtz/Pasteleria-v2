<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/843c3be67a.js" crossorigin="anonymous"></script>
    <title>PasteLaunchX-Formulario</title>
</head>
<body>
@extends('layouts.app')
@section('content')

<!--MENSAJE DE ACCIÓN-->
<div class="text-success text-uppercase fw-bold">
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
</div>
    <!--FORMULARIO-->
    <div class="content">
        <div class="contact-wrapper">
            <h3 class="titulo">formulario</h3>
            <div class="contact-form">
                <form action="{{  url('/pasteleria') }}" method="post" class="row g-3">
                    @csrf

                    <!--Datos del cliente-->
                    <div>
                        <label for="nombre">nombre completo:</label>
                        <input type="text" name="nombre" id="nombre" class="datos" required>
                    </div>
                    <div>
                        <label for="direccion">dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="datos" required>
                    </div>
                    <div>
                        <label for="email">correo electronico:</label>
                        <input type="email" name="email" id="email" class="datos" required>
                    </div>
                    <div>
                        <label for="telefono">telefono:</label>
                        <input type="tel" name="telefono" id="telefono" class="datos" required>
                    </div>
                    <div>
                        <label for="fecha">fecha de entrega:</label>
                        <input type="datetime-local" name="fecha" id="entrega" class="datos" required>
                    </div>
                    <div class="block">
                        <label for="descripcion">describe tu pastel, ¿como lo quieres?:</label>
                        <textarea name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                    <!--Sabores-->
                    <h2 class="titulo block">sabores</h2>
                    <div>
                        <input type="checkbox" name="pastelAleman" id="aleman" value="aleman">
                        <label for="aleman">aleman</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelCapuchino" id="capuchino" value="capuchino">
                        <label for="capuchino">capuchino</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelTresLeches" id="leches" value="tres-leches">
                        <label for="leches">tres leches</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelQueso" id="queso" value="queso">
                        <label for="queso">queso</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelAmericano" id="americano" value="americano">
                        <label for="americano">americano</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelMoka" id="moka" value="moka">
                        <label for="moka">moka</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelFrutas" id="frutas" value="frutas">
                        <label for="frutas">frutas</label>
                    </div>
                    <div>
                        <input type="checkbox" name="pastelCarlos" id="carlosv" value="carlosV">
                        <label for="carlosv">carlosv</label>
                    </div>
                    <!--Decoración-->
                    <h3 class="titulo block">adornos</h3>
                    <div>
                        <input type="checkbox" name="decoracionGeometrica" id="geometrica" value="geometrica">
                        <label for="geometrica">geometrica</label>
                    </div>
                    <div>
                        <input type="checkbox" name="decoracionDripCake" id="drip-cake" value="drip-cake">
                        <label for="drip-cake">drip cake</label>
                    </div>
                    <div>
                        <input type="checkbox" name="decoracionVelaTradicional" id="tradicional" value="vela-tradicional">
                        <label for="tradicional">vela tradicional</label>
                    </div>
                    <div>
                        <input type="checkbox" name="decoracionVelaNumerica" id="numerica" value="vela-numerica">
                        <label for="numerica">vela numerica</label>
                    </div>

                    <div>
                        <button type="submit">enviar</button>
                    </div>
                    <div>
                        <button type="reset">borrar</button>
                    </div>
                    
                </form>

                <div class="info-tienda">
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i> dirección: av. americas #1234</li>
                        <li><i class="fa-solid fa-phone"></i>teléfono: (+52) 1234567890</li>
                        <li><i class="fa-solid fa-calendar-days"></i> horario: L-V 9am a 6pm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
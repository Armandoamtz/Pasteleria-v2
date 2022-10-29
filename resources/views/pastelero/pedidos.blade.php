<!--Datos del cliente-->
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
                <input type="checkbox" name="pastelAleman" id="aleman" value="aleman">
                <label for="aleman" class="text-capitalize">aleman</label>
            </div>
            <div>
                <input type="checkbox" name="pastelCapuchino" id="capuchino" value="capuchino">
                <label for="capuchino" class="text-capitalize">capuchino</label>
            </div>
            <div>
                <input type="checkbox" name="pastelTresLeches" id="leches" value="tres-leches">
                <label for="leches" class="text-capitalize">tres leches</label>
            </div>
            <div>
                <input type="checkbox" name="pastelQueso" id="queso" value="queso">
                <label for="queso">queso</label>
            </div>
            <div>
                <input type="checkbox" name="pastelAmericano" id="americano" value="americano">
                <label for="americano" class="text-capitalize">americano</label>
            </div>
            <div>
                <input type="checkbox" name="pastelMoka" id="moka" value="moka">
                <label for="moka" class="text-capitalize">moka</label>
            </div>
            <div>
                <input type="checkbox" name="pastelFrutas" id="frutas" value="frutas">
                <label for="frutas" class="text-capitalize">frutas</label>
            </div>
            <div>
                <input type="checkbox" name="pastelCarlos" id="carlosv" value="carlosV">
                <label for="carlosv" class="text-capitalize">carlosv</label>
            </div>
        </div>

        <!--Decoración-->
        <br>
        <h3 class="text-center text-uppercase text-primary fw-bold">adornos</h3>
        <div class="d-flex justify-content-around">
            <div>
                <input type="checkbox" name="decoracionGeometrica" id="geometrica" value="geometrica">
                <label for="geometrica" class="text-capitalize">geometrica</label>
            </div>
            <div>
                 <input type="checkbox" name="decoracionDripCake" id="drip-cake" value="drip-cake">
                 <label for="drip-cake" class="text-capitalize">drip cake</label>
             </div>
             <div>
                <input type="checkbox" name="decoracionVelaTradicional" id="tradicional" value="vela-tradicional">
                <label for="tradicional" class="text-capitalize">vela tradicional</label>
            </div>
            <div>
                <input type="checkbox" name="decoracionVelaNumerica" id="numerica" value="vela-numerica">
                <label for="numerica" class="text-capitalize">vela numerica</label>
            </div>
        </div>


        <br>
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-around" style="width: 50%">
                <div>
                    <a href="{{ url('/pasteleria/') }}" class="btn btn-primary text-uppercase fw-bold">regresar</a>
                </div>
                <div>
                    <button type="submit" class="btn btn-success text-uppercase fw-bold">enviar</button>
                </div>
                <div>
                    <button type="reset" class="btn btn-danger text-uppercase fw-bold">borrar</button>
                    <input type="reset" onclick="return confirm('¿Quieres borrar el pedido?')" value="Borrar" class="btn btn-danger">
                </div>
            </div>
        </div>

    </div>
    
</div>
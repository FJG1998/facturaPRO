<?php

require_once 'vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css">

    <title>RELLENE LOS DATOS</title>

</head>

<body>

    <!--Formulario -->

    <div class="contenedor_empresa">

        <section class="empresa">

            <h2>FACTURA ONLINE</h2>

            <form action="facturaOnline.php" method="POST">

                <span>Nº:</span>
                <input type="number" name="num" id="linea00"><br><br>

                <span>Empresa<span>
                <input type="text" name="nempresa" id="linea02"><br><br>

                <span>C.I.F.<span>
                <input type="number" name="cif" id="linea05"><br><br>

        </section>

    </div>

    <!-- Formulario parte de cliente -->

    <div class="contenedor_cliente">

        <section class="cliente">

            <span>Cliente</span>

            <input type="text" name="cliente2" id="linea08"><br><br>

            <span>Dirección</span>

            <input type="text" name="direction" id="linea12"><br><br>

            <span>C.I.F.</span>

            <input type="number" name="cif2" id="linea10"><br><br>

        </section>

    </div>


<!-- Formulario parte de productos -->
    <section class="productos">

    <span>Descripción</span> <span>Cantidad</span> <span>Precio</span>  <span>Total</span> <br>

<?php

    for ($i = 0; $i < 10; $i++) {

        // iterar una sola fila 10 veces en formulario.php
        echo ' <input type="text" name="descripcion0' . $i . '"> ';
        echo ' <input type="number" name="cantidad0' . $i . '"> ';
        echo ' <input type="number" name="precio0' . $i . '"> ';
        echo ' <input type="number" name="total0' . $i . '"><br><br>';

    }
?>
    <span>IVA</span>

    <input type="checkbox" name="iva"><br><br>

    <span>IRPF</span>

<input type="checkbox" name="irpf"><br><br>

        <input type="reset" value="Borrar">
        <input type="submit" value="Calcular Factura">


</form>

</body>

</html>
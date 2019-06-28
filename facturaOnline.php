<?php 

require_once 'vendor/autoload.php'; 

$objFactura = new models\FormFactura();


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TU FACTURA ONLINE</title>

</head>
<body>

<div class="contenedor_empresa"> 

    <section class="empresa"> 

        <ul>

<?php

    echo('<li>Nº' .' '.$_POST['num'] . '</li>');

    echo('<li>Empresa' .' '.$_POST['nempresa'].'</li>' );

    echo('<li>C.I.F.' .' '. $_POST['cif'] .'</li>');

    echo( '<li>Cliente' .' '. $_POST['cliente2'] .'</li>');

    echo('<li>Dirección'.' '. $_POST['direction']. '</li>');

    echo('<li>C.I.F.'.' '. $_POST['cif2']. '</li>');
    
    ?>
        </ul>

    </section>

</div>

<?php

$pepe = new  models\FormFactura();

$pepe->printProductos();

$pepe->subtotal();

?>
    
</body>
</html>


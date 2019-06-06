<?php require_once 'vendor/autoload.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TU FACTURA ONLINE</title>

</head>
<body>



<?php


echo ' <div class="contenedor_empresa"> ';

    echo ' <section class="empresa"> ';

        echo'<ul>';

            echo('<li>Nº' .' '.$_POST['num'] . '</li>');

            echo('<li>Empresa' .' '.$_POST['nempresa'].'</li>' );

            echo('<li>C.I.F.' .' '. $_POST['cif'] .'</li>');

            echo( '<li>Cliente' .' '. $_POST['cliente2'] .'</li>');

            echo('<li>Dirección'.' '. $_POST['direction']. '</li>');

            echo('<li>C.I.F.'.' '. $_POST['cif2']. '</li>');

        echo'</ul>';

    echo'</section>';

echo'</div>';

$pepe = new  models\FormFactura();

$pepe->printProductos();

?>
    
</body>
</html>


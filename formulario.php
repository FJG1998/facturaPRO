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

<!--Formulario parte de la empresa -->

<?php

$printF = new models\FormFactura();

$printF->printForm();


?>


    
</body>
</html>
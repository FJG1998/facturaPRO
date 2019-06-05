<?php require_once 'vendor/autoload.php';


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>REGISTRATE</title>
</head>
<body>

<section class="contenedor">
        
        <div>
    
            <form action="" method="POST">
    
    
            <span>REGISTRATE:</span><br>
            
            <input type="text" name="emailRegistro" id="">
    
            </form>
    
    
        </div>

    </section>

<?php

if(isset($_POST['emailRegistro'])){

$email = $_POST['emailRegistro'];

$registro = new models\Registro();

$registro->registrar($email);

}

?>
    
</body>
</html>
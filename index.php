<?php require_once 'vendor/autoload.php'; ?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>INICIO DE SESIÓN</title>
</head>
<body>

<section class="contenedor">
        
        <div>
    
            <form action="" method="POST">
    
    
            <span>Email:</span><br>
            
            <input type="email" name="emailLogin" id="">
    
            </form>
    
    
        </div>

    </section>

<?php

if(isset($_POST['emailLogin'])){

    $email = $_POST['emailLogin'];

    $login = new models\Login();

    $login->login($email);

}

?>
    
</body>
</html>
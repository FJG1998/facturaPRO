<?php namespace models;

require_once 'vendor/autoload.php';


// Clase que se extiende de login, todo lo relacionado con login

class Registro{

    // PROPIEDADES


    // Constructor

    // public function __construct(){}



    //Metodos

        // Metodo que escribe el correo electronico en el registro

    public function registrar($email){

        if(!empty($email)){

            $registro = fopen('assets/txt/registro.txt','a+');

            $array = file ('assets/txt/registro.txt',FILE_IGNORE_NEW_LINES);
            
            $encontrado = 0;

            foreach($array as $valor){

                if($email == $valor){

                    echo 'Este email ya esta registrado, por favor inicie sesión:<br>';

                    echo '<a class="boton" href="index.php">INICIAR SESION</a>';

                    $encontrado =1;

                }
                
            }

            if($encontrado == 0){
    
                fwrite ($registro,$email.PHP_EOL);

                fclose($registro);

                header('location: formulario.php');
            }

        }


        
    }

}


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

                    echo 'Este email ya esta registrado';

                    $encontrado =1;

                }
                
            }

            if($encontrado == 0){

                var_dump ($array);
    
                fwrite ($registro,$email.PHP_EOL);

                echo 'OK';

                fclose($registro);
            }

        }


        
    }

}

// $registro = new models\Registro();
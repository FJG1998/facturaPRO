<?php namespace models;

require_once 'vendor/autoload.php';


class FormFactura{

    // public function


    public function precio($precio, $cantidad){

        $multiplicar = $precio * $cantidad;

        $solucion = $multiplicar;
        
        return($solucion);
    
    }

    public function printProductos(){

        $this->precio = [];

        for ($i=0; $i < 5; $i++) {

            if(($_POST['precio0' . $i] != "") && ($_POST['cantidad0' . $i] != "")){
          
                array_push($this->precio,
          
                $this->precio(

                    (int) $_POST['precio0' . $i],
                    (int) $_POST['cantidad0' . $i]
                    
                    )
                  );
                  // PARA QUE META UN NULL EN EL ARRAY SI NO HAY DATOS
              }else{
          
                array_push($this->precio,NULL);
          
              }
          }
        
        $i=0;

    foreach($this->precio as $valor){

        // PARA QUE NO SALGA LA LINEA SI HAY UN NULL EN EL ARRAY $PRECIO-->GRACIAS A LA LINEA 25 DE (datos.php)
        if($valor != NULL){

            // CONTENIDO DEL BUCLE

    echo('<article class="filas__linea02">');

    echo('<span>'.' '.$_POST['descripcion0'. $i] .'</span>');

    echo('<span>'.' '.$_POST['cantidad0' . $i] .'</span>');

    echo('<span>'.' '.$_POST['precio0' . $i] .'</span>');

    echo('<span>'.' '.$valor .'</span>');

    echo('</article>');

} $i++;}

}


public function subtotal(){       
    // bucle para que calcule todas las filas
    $precio = $this->precio;

    $suma=0;

    foreach($precio AS $valor){

    $suma += $valor;
}
 // devuelve la informacion en pantalla
echo $suma;
}

}


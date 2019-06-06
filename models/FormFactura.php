<?php namespace models;

require_once 'vendor/autoload.php';


class FormFactura{


    public function printForm(){

        echo ' <div class="contenedor_empresa"> ';

        echo ' <section class="empresa"> ';

            echo ' <h2>FACTURA ONLINE</h2> ';

            echo ' <form action="facturaOnline.php" method="POST"> ';

                echo ' <span>Nº:</span> ';
                echo ' <input type="number" name="num" id="linea00"><br><br> ';

                echo ' <span>Empresa<span> ';
                echo ' <input type="text" name="nempresa" id="linea02"><br><br> ';

                echo ' <span>C.I.F.<span> ';

                echo ' <input type="number" name="cif" id="linea05"><br><br> ';

        echo ' </section> ';

    echo ' </div> ';

echo ' <!-- Formulario parte de cliente --> ';

    echo ' <div class="contenedor_cliente"> ';

        echo ' <section class="cliente"> ';

            echo ' <span>Cliente</span> ';

            echo ' <input type="text" name="cliente2" id="linea08"><br><br> ';

            echo ' <span>Dirección</span> ';

            echo ' <input type="text" name="direction" id="linea12"><br><br> ';

            echo ' <span>C.I.F.</span> ';

            echo ' <input type="number" name="cif2" id="linea10"><br><br> ';

        echo ' </section> ';

    echo ' </div> ';

echo ' <!-- Formulario parte de productos --> ';

    echo ' <section class="productos"> ';

        echo ' <hr> ';

        echo ' <span>Descripción</span> <span>Cantidad</span> <span>Precio</span>  <span>Total</span> <br>';

        echo ' <input type="text" name="descripcion00"> ';

        echo ' <input type="number" name="cantidad00"> ';
        echo ' <input type="number" name="precio00"> ';
        echo ' <input type="number" name="total00"><br><br> ';

        echo ' <input type="text" name="descripcion01"> ';
        echo ' <input type="number" name="cantidad01"> ';
        echo ' <input type="number" name="precio01"> ';
        echo ' <input type="number" name="total01"><br><br> ';

        echo ' <input type="text" name="descripcion02"> ';
        echo ' <input type="number" name="cantidad02"> ';
        echo ' <input type="number" name="precio02"> ';
        echo ' <input type="number" name="total02"><br><br> ';


        echo ' <input type="text" name="descripcion03"> ';
        echo ' <input type="number" name="cantidad03"> ';
        echo ' <input type="number" name="precio03"> ';
        echo ' <input type="number" name="total03"><br><br> ';

        echo ' <input type="text" name="descripcion04"> ';
        echo ' <input type="number" name="cantidad04"> ';
        echo ' <input type="number" name="precio04"> ';
        echo ' <input type="number" name="total04"><br><br> ';


        echo ' <input type="reset" value="Borrar"> ';
        echo ' <input type="submit" value="Calcular Factura"> ';


    echo ' </form> ';

    }

    public function precio($precio, $cantidad){

            
        $multiplicar = $precio * $cantidad;

        $solucion = $multiplicar;
        
        return($solucion);
    }

    public function printProductos(){

        $precio = [];

        for ($i=0; $i < 5; $i++) {

            if(($_POST['precio0' . $i] != "") && ($_POST['cantidad0' . $i] != "")){
          
                array_push($precio,
          
                $this->precio(

                    (int) $_POST['precio0' . $i],
                    (int) $_POST['cantidad0' . $i]
                    )
                  );
                  // PARA QUE META UN NULL EN EL ARRAY SI NO HAY DATOS
              }else{
          
                array_push($precio,NULL);
          
              }
          }
        
        $i=0;

    foreach($precio as $valor){

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
}


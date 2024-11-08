<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Codigo HTML</h1>
    <?php
        # Esto va a imprimir
        echo "<h1>Codigo PHP</h1>";
        print("Hola");


        //Esto no se interpreta

        /*
            Muchas
            Líneas 
            de Comentario
        
        */

        echo "<!-- ESTO ES UN COMENTARIO HTML -->";

        #variables
        //$nombre = "Luis Xutuc";
        

        $nombre = existeParametro("nombre", false);
        
        $texto = "Repaso de PHP con $nombre";
        

        $altura = existeParametro("altura", true);

        $textoFinal = "<h1>".$texto.", su altura es:".$altura."cm</h1>";

        echo $textoFinal;
        echo $textoFinal;
        echo $textoFinal;
        echo $textoFinal;
        $textoFinal .= "Te he troleado my bro";
        echo $textoFinal;

        #GET
        echo "<br/>";
        $nombre = existeParametro("nombre",false);



        #condiciones
        if($altura >=170){
            echo "<h3 style='background: green; color: white;'>Eres una persona alta</h3>";
        }else{
            echo "<h3>Eres de altura promedio</h3>";
        }

        #funciones
        function existeParametro($parametro, $numero){
            if(isset($_GET[$parametro])){
                $valor =$_GET[$parametro];
                
            }else{
                $valor = "Texto por defecto";

                if($numero){
                    $valor = 0;
                }
            }



            return $valor;
        }
        
        #Arrays
        $personas = ["Luis","Fran","Paco","Gerardo"];
        ?>


        <h1>Listado</h1>
        <ul>
            <?php
                foreach($personas as $nombre){
                    echo "<li>$nombre</li>";
                }

            ?>
        
        </ul>

    
</body>
</html>
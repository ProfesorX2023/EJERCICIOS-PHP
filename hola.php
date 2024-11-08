<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        # Comentario

        // Esto tambien es un comentario

        /*
            Comentario
            multilinea
        */
        // echo "<h1>Hola mundo</h1>";

        $nombre = "Henry";

        //echo "Mi nombre es " . $nombre;

        //Integer  float  String  Boolean  array  Object

        // define("PI", 3.141592654);

        // echo "El valor de PI es ".PI

        // echo "6 + 4 = " . (6+4) . "<br/>";
        // echo "6 - 4 = " . (6-4) . "<br/>";
        // echo "6 * 4 = " . (6*4) . "<br/>";
        // echo "6 / 4 = " . (6/4) . "<br/>";
        //ho strlen($cadena)."<br>";
        // echo strlen(ltrim($cadena))."<br>";
        // echo strlen(rtrim($cadena))."<br>";
        // echo strlen(trim($cadena))."<br>";

        // $usuario = "Henry";

        // printf("Mi Nombre es %s",$usuario);
 echo "6 % 4 = " . (6%4) . "<br/>";

        // $miNumero = 6;
        // $refNumero = &$miNumero;

        // $miNumero = 20;

        // echo $miNumero;

        $miEdad = 20;

        // if($miEdad > 30){
        //     echo "Mi edad es mayor a 10";
        // }else if($miEdad === 20){
        //     echo "Tu edad es 20";
        // }
        // else{
        //     echo "No puedo adivinar tu edad";
        // }

        // if(($miEdad === 20) || ($miEdad > 25)){
        //     echo "Tu edad es 20";
        // }

        // $miNumero = 20;

        // $resultado = ($miNumero < 20) ? "Tu número es menor a 40" : "Tu número no es menor a 40";

        // echo $resultado;

        // $usuario = "Beto";
        // switch($usuario){
        //     case "Luis":
        //     echo "Hola Luis";
        //     break;
        //     case "Karmen":
        //     echo "Hola Karmen";
        //     break;
        //     case "Henry":
        //     echo "Hola Henry";
        //     break;
        //     default:
        //     echo "No puedo adivinar tu nombre";
        //     break;

        // }

        // $miNumero = 0;
        // while($miNumero < 10){
        //     echo $miNumero."<br>";
        //     $miNumero++;
        // }

        // for($num = 1; $num <= 10; $num++){
        //     echo $num. "<br/>";

        // }

        // for($num = 1; $num <= 10; $num++){
        //     echo $num;
        //     if($num !== 10){
        //         echo ", ";
        //     }else{
        //         break;
        //     }

        // }

        // $personas = array("Henry","Luis","Carmen","Beto");

        // // print_r($personas);

        // // echo count($personas);

        // foreach($personas as $persona){
        //     echo $persona."<br>";

        // }

        $personas = array("Luis"=>20, "Beto"=>30,"Carmen"=>25);

        // foreach($personas as $key => $val){
        //     echo $key." tiene ".$val."<br>";
        // }

        // foreach($personas as $key => $val){
        // echo "$key tiene $val <br>";
        // }

        // $cadena = "        Los Colores        ";
        // ec
        // $mensaje = "Los Cuadernos";

        // echo strtoupper($mensaje)."<br>";
        // echo strtolower($mensaje)."<br>";

        // print_r(explode(' ',$mensaje));

        function myFunction($a , $b){
            return $a + $b;
        }

        echo "La suma de 6 + 4 =  ".myFunction(6,4);

    ?>
</body>
</html>
<?php
class Lenguaje {
    public $nombre;
    public $anio;

    public function __construct($nombre, $anio){
        $this->nombre = $nombre;
        $this->anio = $anio;
    }

    public function description(){
        echo $this->nombre." fue creado en ".$this->anio;
    }
}

$html = new Lenguaje('HTML', 1993);
$css = new Lenguaje('CSS', 1996);
$html->description();
echo "<br>";
$css->description();
?>
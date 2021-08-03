<?php
    
    function principal($lado1, $lado2,$lado3,$lado4) {
        $perimetro = $lado1 + $lado2 + $lado3 + $lado4;
        return $perimetro;
    }
        echo principal(5,5,10,10)."<br>";
        echo principal(5,5,5,5)."<br>";
        echo principal(12,12,28,28)."<br>";
        echo principal(3,3,3,5)."<br>";
?>

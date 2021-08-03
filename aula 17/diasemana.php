<?php
    // Array com os dias da semana
    $diasemana= array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

    $data = date('Y-m-d');

    // Varivel que recebe o dia da semana 
    $diasemana_numero = date('w', strtotime($data));

    // Exibe o dia da semana com o Array
    echo "Hoje é " ,$diasemana[$diasemana_numero];
?>

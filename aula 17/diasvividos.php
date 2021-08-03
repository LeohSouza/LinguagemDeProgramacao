<?php
    //recebendo a data
    $nascimento = "02/10/2000";
    $hoje = date('d/m/Y');

    //convertendo para o padrão norte americano
    $nascimento = implode('-',array_reverse(explode('/', $nascimento)));
    $hoje = implode('-',array_reverse(explode('/', $hoje)));

    //convertendo as datas
    $h = strtotime($hoje);
    $n = strtotime($nascimento);


    //verificando a diferença
    $d = ($h - $n)/86400;

    echo "A quantidade de dias vividos são: ",$d, " dias";

?>
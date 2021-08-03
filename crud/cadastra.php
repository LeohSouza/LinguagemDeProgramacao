<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

        <?php
            include_once('conexao.php');
            
            $mysql = new BancodeDados();
            $mysql->conecta();
                    
            // recuperando 
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];	
            $sobrenome = $_POST['sobrenome'];	
            $endereco = $_POST['endereco'];	
            $numero = $_POST['numero'];	
            $bairro = $_POST['bairro'];	
            $cidade = $_POST['cidade'];	
            $uf = $_POST['uf'];
            $area = $_POST['area'];	
            $escolaridade = $_POST['escolaridade'];
            $email = $_POST['email'];	
                

            $sqlinsert =  "insert into tbprofissional (codigo, nome, sobrenome, endereco, numero, bairro, cidade, uf, area, escolaridade, email) values ($codigo, '$nome','$sobrenome','$endereco','$numero','$bairro','$cidade','$uf','$area','$escolaridade','$email')";
        
            $resultado = $mysql->sqlstring($sqlinsert,"Inclusão");
        ?>

        <div id="container">
            <div id="menu">
                <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='index.php';">Voltar</button>
            </div>
        </div>
    </body>
</html>
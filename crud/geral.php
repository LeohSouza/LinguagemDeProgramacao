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
        <div id="container">

            <div id="menu">
                <?php
                    include_once('conexao.php');
                    //criando o objeto mysql e conectando ao banco de dados
                    $mysql = new BancodeDados();
                    $mysql->conecta();
                    
                    // ajustando a instru��o select para ordenar por produto
                    $query = mysqli_query($mysql->con,"select * from tbprofissional order by codigo");

                    if (!$query) {
                        echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
                        die('<b>Query Inv�lida:</b>' . @mysqli_error($mysql->con));  
                    }

                    echo "<table class='table'>";
                    echo "<tr class='table-dark'>
                        <th width='30px' align='center'>Id</th>
                        <th width='100px'>Codigo</th>
                        <th width='250px'>Nome</th>
                        <th width='100px'>Sobrenome</th>
                        <th width='100px'>Endereco</th>
                        <th width='100px'>Numero</th>
                        <th width='100px'>Bairro</th>
                        <th width='100px'>Cidade</th>
                        <th width='100px'>UF</th>
                        <th width='100px'>Area</th>
                        <th width='100px'>Escolaridade</th>
                        <th width='100px'>Email</th></tr>";

                    while($dados=mysqli_fetch_array($query)) 
                    {
                        echo "<tr>";
                        echo "<td align='center'>". $dados['Id']."</td>";
                        echo "<td>". $dados['Codigo']."</td>";
                        echo "<td>". $dados['Nome']."</td>";
                        echo "<td>". $dados['Sobrenome']."</td>";
                        echo "<td>". $dados['Endereco']."</td>";	
                        echo "<td>". $dados['Numero']."</td>";		
                        echo "<td>". $dados['Bairro']."</td>";		
                        echo "<td>". $dados['Cidade']."</td>";	
                        echo "<td>". $dados['UF']."</td>";		
                        echo "<td>". $dados['Area']."</td>";		
                        echo "<td>". $dados['Escolaridade']."</td>";		
                        echo "<td>". $dados['Email']."</td>";	
                        echo "</tr>";	
                        
                    }
                    echo "</table>";
                    $mysql->fechar();
                ?>
                <div class="col-12">
                    <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='index.php';">Voltar</button>
                </div>
            </div>
        </div>
    </body>
</html>
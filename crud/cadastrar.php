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
        <div class="container">
            <div id="menu">
                <h1 class="ali">Cadastro de Profissionais</h1>
                
                <form action="cadastra.php" method="post" class="row g-3">
                    
                    <div class="col-md-4">
                        <label for="codigo" class="form-label">Código:</label>
                        <input type="number" class="form-control" id="codigo" name="codigo" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" maxlength="30" required>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="sobrenome" class="form-label">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" maxlength="30" required>
                    </div>
                    
                    <div class="col-md-5">
                        <label label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" maxlength="70" required>
                    </div>
                    
                    <div class="col-md-1">
                        <label label for="numero" class="form-label">Número:</label>
                        <input type="number" class="form-control" id="numero" name="numero" maxlength="5" required>
                    </div>
                    
                    <div class="col-md-2">
                        <label label for="bairro" class="form-label">Baírro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" required>
                    </div>
                    
                    <div class="col-md-2">
                        <label label for="cidade" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="50" required>
                    </div>
                    
                    <div class="col-md-2">
                        <label label for="uf" class="form-label">UF:</label>
                        <input type="text" class="form-control" id="uf" name="uf" maxlength="2" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label label for="area" class="form-label">Area de atuação:</label>
                        <input type="text" class="form-control" id="area" name="area" maxlength="20" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label label for="escolaridade" class="form-label">Nível de escolaridade:</label>
                        <input type="text" class="form-control" id="escolaridade" name="escolaridade" maxlength="20" required>
                    </div>
                    
                    <div class="col-12">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"  maxlength="150" required>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                        <button type="reset" class="btn btn-secondary btn-sm">Limpar</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='index.php';">Voltar</button>
                    </div>
                </form>
            </div>    
        </div>
    </body>
</html>
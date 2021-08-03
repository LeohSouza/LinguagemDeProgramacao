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
                <h1>Excluir Profissionais</h1>

                <form action="exclui.php" method="POST">
                    <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="codigo" name="codigo" required>
                        <label for="codigo">Código:</label>
                    </div>
                     
                    <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                    <button type="reset" class="btn btn-secondary btn-sm">Limpar</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='index.php';">Voltar</button>
                </form>
            </div>
        </div>
    </body>
</html>
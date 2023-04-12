<?php require_once "validador_acesso.php"; ?>

<?php

$arquivo_chamado = fopen('../../../../app_help_desk/Arquivo_Chamado/arquivo.txt', 'r');

$chamados = array();
while (!feof($arquivo_chamado)) {
    $registro_chamado = fgets($arquivo_chamado);

    $dados_chamados = explode('|', $registro_chamado);

    if ($_SESSION['tipo_perfil'] == 2) {
        if ($_SESSION['id'] != $dados_chamados[0]) {
            continue;
        } else {
            $chamados[] = $registro_chamado;
        }
    } else {
        $chamados[] = $registro_chamado;
    }
}

fclose($arquivo_chamado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <!-- Fontewesom -->
    <script src="https://kit.fontawesome.com/7d3a8355c9.js" crossorigin="anonymous"></script>

    <!-- CSS Interno -->
    <link rel="stylesheet" href="CSS/style.css" />

    <title>App Help Desk</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="IMG/logo.png" width="30" height="30" alt="Logo Help Desck" class="d-inline-block align-top">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">Sair <i class="fa-solid fa-right-from-bracket" style="color: rgba(255,255,255,.5)"></i> </a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de chamado
                    </div>
                    <div class="card-body">
                        <?php foreach ($chamados as $chamado) { ?>
                            <?php
                            $dados_chamados = explode('|', $chamado);

                            if (count($dados_chamados) < 3) {
                                continue;
                            }
                            ?>
                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h4 class="card-title titulo"><?php echo $dados_chamados[1] ?></h4>
                                    <h6 class="card-subtitle mb-2 mt-2 text-muted categoria">
                                        <?php echo $dados_chamados[2] ?></h6>
                                    <p class="card-text descricao"><?php echo $dados_chamados[3] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!-- Incio do JS personalizado -->
    <!-- <script src="JS/script.js"></script> -->
</body>

</html>
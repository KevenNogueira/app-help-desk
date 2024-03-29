<?php require_once "validador_acesso.php"; ?>

<?php if (isset($_GET['usuario']) && $_GET['usuario'] == 'sucesso') {
    echo "<script> alert('Usuário cadastrado com sucesso!'); </script>";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

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
                <a class="nav-link" href="logoff.php">Sair <i class="fa-solid fa-right-from-bracket"
                        style="color: rgba(255,255,255,.5)"></i> </a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">

                        <?php if ($_SESSION['tipo_perfil'] == 1) { ?>

                        <div class="row">
                            <div class="col-4 d-flex mb-2 justify-content-center">Abertura Chamado</div>
                            <div class="col-4 d-flex mb-2 justify-content-center">Consulta Chamado</div>
                            <div class="col-4 d-flex mb-2 justify-content-center">Cadastro Usuario</div>
                        </div>
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <a href="abrir_chamado.php">
                                    <img src="IMG/formulario_abrir_chamado.png" alt="Abrir Chamado" width="70"
                                        height="70">
                                </a>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <a href="consulta_chamado.php">
                                    <img src="IMG/formulario_consultar_chamado.png" alt="Consultar Chamado" width="70"
                                        height="70">
                                </a>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <a href="cria_usuario.php">
                                    <img src="IMG/adicao_usuario.png" alt="cadastro de Usuários" width="70" height="70">
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>

                        <div class="row">
                            <div class="col-6 d-flex mb-2 justify-content-center">Abertura Chamado</div>
                            <div class="col-6 d-flex mb-2 justify-content-center">Consulta Chamado</div>
                        </div>
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="abrir_chamado.php">
                                    <img src="IMG/formulario_abrir_chamado.png" alt="Abrir Chamado" width="70"
                                        height="70">
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consulta_chamado.php">
                                    <img src="IMG/formulario_consultar_chamado.png" alt="Consultar Chamado" width="70"
                                        height="70">
                                </a>
                            </div>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- Incio do JS personalizado -->
    <!-- <script src="JS/script.js"></script> -->
</body>

</html>
<?php require_once "validador_acesso.php"; ?>

<?php

if ($_SESSION['tipo_perfil'] != 1) {
    header('Location: home.php');
};

if (isset($_GET['campo_vazio']) && $_GET['campo_vazio'] == 'vazio') {
    echo "<script> alert('A campos que precisam ser preenchidos!'); </script>";
}
if (isset($_GET['email']) && $_GET['email'] == 'igual') {
    echo "<script> alert('Email já cadastrado na base de dados!'); </script>";
}

if (isset($_GET['senha']) && $_GET['senha'] == 'erro') {
    echo "<script> alert('A senha inserida está incorreta!'); </script>";
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
            <div class="card-user">
                <div class="card">
                    <div class="card-header">
                        Cadastro de Usuário
                    </div>
                    <div class="card-body">
                        <form action="cadastra_usuario.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <input name="senha2" type="password" class="form-control"
                                    placeholder="Confirme sua senha">
                            </div>
                            <div class="form-group">
                                <select name="tipo_perfil" class="form-control">
                                    <option value="2">Usuário</option>
                                    <option value="1">Administrador</option>
                                </select>
                            </div>
                            <button class="btn btn-lg btn-info btn-block">Cadastrar</button>
                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                        </form>
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
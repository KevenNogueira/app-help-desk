<?php require_once "validador_acesso.php"; ?>

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
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Abertura de Chamado
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="">
                                    <div class="form-group">
                                        <label for="">Título</label>
                                        <input type="text" class="form-control" placeholder="Título">
                                    </div>
                                    <div class="form-grup">
                                        <label for="">Categoria</label>
                                        <select class="form-control">
                                            <option>
                                                Criação Usuário
                                            </option>
                                            <option>Impressora</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                            <option>Rede</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descrição</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
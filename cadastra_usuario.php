<?php

require_once "validador_acesso.php";

$valida_email = comparaEmail();

if ($_POST['email'] == '' || $_POST['senha'] == '' || $_POST['senha2'] == '') {
    header('Location: cria_usuario.php?campo_vazio=vazio');
} else if ($_POST['senha'] != $_POST['senha2']) {
    header('Location: cria_usuario.php?senha=erro');
} else if ($valida_email) {
    header('Location: cria_usuario.php?email=igual');
} else {

    $id_gerado = geraId();

    $usuario = $id_gerado . '|' . $_POST['email'] . '|' . $_POST['senha'] . '|' . $_POST['tipo_perfil'] . PHP_EOL;

    $arquivo_usuario = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Usuarios\usuario.txt', 'a');

    fwrite($arquivo_usuario, $usuario);
    fclose($arquivo_usuario);

    header('Location: home.php?usuario=sucesso');
};

function geraId()
{
    $arquivo_usuario = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Usuarios\usuario.txt', 'r');

    $usuarios = array();

    while (!feof($arquivo_usuario)) {
        $registro_usuario = fgets($arquivo_usuario);
        $usuario = explode('|', $registro_usuario);
        if (count($usuario) == 4) {
            array_push($usuarios, $usuario);
        }
    }
    fclose($arquivo_usuario);

    $ultimo_usuario = array_pop($usuarios);

    $ultimo_id = $ultimo_usuario[0];

    return $ultimo_id + 1;
}

function comparaEmail()
{

    $arquivo_usuario = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Usuarios\usuario.txt', 'r');

    $usuarios = array();

    while (!feof($arquivo_usuario)) {
        $registro_usuario = fgets($arquivo_usuario);
        $usuario = explode('|', $registro_usuario);
        if (count($usuario) == 4) {
            array_push($usuarios, $usuario);
        }
    }
    fclose($arquivo_usuario);

    foreach ($usuarios as $usuario) {
        if ($_POST['email'] == $usuario[1]) {
            return true;
        }
    };
}
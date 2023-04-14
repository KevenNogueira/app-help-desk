<?php

session_start();


$usuario_autenticacao = false;
$id_usuario = null;
$tipo_perfil = null;
$lista_usuarios = array();

$arquivo_usuario = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Usuarios\usuario.txt', 'r');

while (!feof($arquivo_usuario)) {
    $registro_usuario = fgets($arquivo_usuario);
    $usuario = explode('|', $registro_usuario);
    if (count($usuario) == 4) {
        array_push($lista_usuarios, $usuario);
    }
}

fclose($arquivo_usuario);

foreach ($lista_usuarios as $user) {
    if ($user[1] == $_POST['email'] && $user[2] == $_POST['senha']) {
        $usuario_autenticacao = true;
        $id_usuario = $user[0];
        $tipo_perfil = $user[3];
    }
}

if ($usuario_autenticacao) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $id_usuario;
    $_SESSION['tipo_perfil'] = $tipo_perfil;
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
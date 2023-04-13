<?php

if ($_POST['senha'] != $_POST['senha2']) {
    header('Location: cria_usuario.php?senha=erro');
} else {

    $arquivo_usuario = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Usuarios\usuario.txt', 'r');

    $usuarios = array();

    while (!feof($arquivo_usuario)) {
        $registro_usuario = fgets($arquivo_usuario);
        $usuario = explode('|', $registro_usuario);
        if (count($usuario) >= 4) {
            array_push($usuarios, $usuario);
        }
    }
    fclose($arquivo_usuario);

    $ultimo_usuario = array_pop($usuarios);

    $id_gerado = geraId($ultimo_usuario[0]);

    echo $id_gerado;

    //$user = '$id' . '|' . $_POST['email'] . '|' . $_POST['senha'] . '|' . $_POST['tipo_perfil'] . PHP_EOL;

    //header('Location: home.php?usuario=sucesso');
};


function geraId($id)
{
    $novo_id = $id + 1;
    return $novo_id;
};

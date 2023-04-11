<?php

session_start();

/* 
    Criação da lista de usuarios para login no sistema.  
    O mesmo será criado me um array, pois ainda não esta sendo trabalhado com banco de dados. 
*/
$controle_perfil = array(1 => 'Administrativo', 2 => 'Usuario');

$lista_usuarios = array(
    array('id' => 1, 'email' => 'adm@chamado.com.br', 'senha' => 'adm.adm', 'tipo_perfil' => 1),
    array('id' => 2, 'email' => 'suporte@chamado.com.br', 'senha' => 'sup.sup', 'tipo_perfil' => 1),
    array('id' => 3, 'email' => 'ailton@chamado.com.br', 'senha' => 'ailton.chamdo', 'tipo_perfil' => 2),
    array('id' => 4, 'email' => 'raquel@chamado.com.br', 'senha' => 'raquel.chamado', 'tipo_perfil' => 2),
    array('id' => 5, 'email' => 'kaique@chamado.com.br', 'senha' => 'kaique.chamado', 'tipo_perfil' => 2),
    array('id' => 6, 'email' => 'keven@chamado.com.br', 'senha' => 'keven.chamado', 'tipo_perfil' => 2),
    array('id' => 7, 'email' => 'mileny@chamado.com.br', 'senha' => 'mileny.chamado', 'tipo_perfil' => 2),
);
$usuario_autenticacao = false;
$id_usuario = null;
$tipo_perfil = null;

foreach ($lista_usuarios as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticacao = true;
        $id_usuario = $user['id'];
        $tipo_perfil = $user['tipo_perfil'];
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

<?php

session_start();

/* 
    Criação da lista de usuarios para login no sistema.  
    O mesmo será criado me um array, pois ainda não esta sendo trabalhado com banco de dados. 
*/

$lista_usuarios = array(
    array('email' => 'adm@chamado.com.br', 'senha' => 'adm.adm'),
    array('email' => 'suporte@chamado.com.br', 'senha' => 'sup.sup'),
    array('email' => 'ailton@chamado.com.br', 'senha' => 'ailton.chamdo'),
    array('email' => 'raquel@chamado.com.br', 'senha' => 'raquel.chamado'),
    array('email' => 'kaique@chamado.com.br', 'senha' => 'kaique.chamado'),
    array('email' => 'keven@chamado.com.br', 'senha' => 'keven.chamado'),
    array('email' => 'mileny@chamado.com.br', 'senha' => 'mileny.chamado'),
);
$usuario_autenticacao = false;

foreach ($lista_usuarios as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticacao = true;
    }
}

if ($usuario_autenticacao) {
    echo 'Usario autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
<?php

/* 
    Criação da lista de usuarios para login no sistema.  
    O mesmo será criado me um array, pois ainda não esta sendo trabalhado com banco de dados. 
*/

$lista_usuarios = array(
    array('email' => 'adm@chamado.com.br', 'senha' => 'adm.adm'),
    array('email' => 'suporte@chamado.com.br', 'senha' => 'sup.sup'),
    array('email' => 'ailton@chamado.com.br', 'senha' => 'ailton.chamdo'),
    array('email' => 'raquel@chamado.com.br', 'senha' => 'raquel.chamado'),
);
$usuaria_autenticacao = false;

foreach ($lista_usuarios as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuaria_autenticacao = true;
    }
}

if ($usuaria_autenticacao) {
    echo 'Usario autenticado';
} else {
    header('Location: index.php?login=erro');
}

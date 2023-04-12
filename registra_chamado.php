<?php
session_start();

$titulo = str_replace('|', '#', $_POST['titulo']);
$descricao = str_replace('|', '#', $_POST['descricao']);

if ($titulo == '' || $descricao == '') {
    header('Location: abrir_chamado.php?chamado=erro');
} else {

    $chamado = $_SESSION['id'] . '|' . $titulo . '|' . $_POST['categoria'] . '|' . $descricao . PHP_EOL;

    $arquivo_chamado = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Arquivo_Chamado\arquivo.txt', 'a');

    fwrite($arquivo_chamado, $chamado);

    fclose($arquivo_chamado);
    header('Location: abrir_chamado.php?chamado=sucesso');
}

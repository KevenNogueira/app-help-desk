<?php
session_start();

$titulo = str_replace('|', '#', $_POST['titulo']);
$descricao = str_replace('|', '#', $_POST['descricao']);

$chamado = $_SESSION['id'] . '|' . $titulo . '|' . $_POST['categoria'] . '|' . $descricao . PHP_EOL;

$arquivo_chamado = fopen('../../../../app_help_desk/Arquivo_Chamado/arquivo.txt', 'a');

fwrite($arquivo_chamado, $chamado);

fclose($arquivo_chamado);
header('Location: abrir_chamado.php?chamado=sucesso');

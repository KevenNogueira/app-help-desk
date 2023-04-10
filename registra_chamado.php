<?php

$titulo = str_replace('|', '#', $_POST['titulo']);
$descricao = str_replace('|', '#', $_POST['descricao']);

$chamado = $titulo . ' | ' . $_POST['categoria'] . ' | ' . $descricao . PHP_EOL;

$chamados = fopen('D:\Downloads\Programacao\XAMPP\XAMPP\htdocs\WorkSpace\PHP Basico\App Help Desk\Arquivo_Chamado\arquivo.txt', 'a');

fwrite($chamados, $chamado);

fclose($chamados);
header('Location: abrir_chamado.php?chamado=sucesso');

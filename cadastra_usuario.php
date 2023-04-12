<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_POST['senha'] != $_POST['senha2']) {

    header('Location: criacao_usuario.php?senha=erro');
} else {




    header('Location: home.php?usuario=sucesso');
};

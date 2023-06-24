<?php
define('HOST', '127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','cav');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('FALHA NA CONEXAO COM O BD');
?>
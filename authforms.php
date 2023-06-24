<?php

if(empty($_POST['nome']) || empty($_POST['serie']) || empty($_POST['turma']) || empty($_POST['tamanho_camisa']) || empty($_POST['titulo']) || empty($_POST['tpstandy'])){
  header('location: formulario.php');
  exit();
}else{
    header('location: sucesso.php');
}

?>
<?php

//if(empty($_POST['matricula1']) || empty($_POST['matricula2']) || empty($_POST['matricula3']) || empty($_POST['matricula4'])){
 // header('location: index.php');
 // exit();
//}
$verifica = 0;
switch(true){
  case(empty($_POST['matricula1'])):
    $verifica++;
  case (empty($_POST['matricula2'])):
    $verifica++;
  case (empty($_POST['matricula3'])):
      $verifica++;
  case (empty($_POST['matricula4'])):
        $verifica++;

  }

// Crio esse array para armazenar as matrículas enviadas pelo formulário
$matriculas = array();

// Verifica se cada campo de matrícula foi preenchido e adiciona no array matricula[]
if (isset($_POST['matricula1'])) {
  $matriculas[] = $_POST['matricula1'];
}
if (isset($_POST['matricula2'])) {
  $matriculas[] = $_POST['matricula2'];
}
if (isset($_POST['matricula3'])) {
  $matriculas[] = $_POST['matricula3'];
}
if (isset($_POST['matricula4'])) {
  $matriculas[] = $_POST['matricula4'];
}

// Aqui conto quantos campos foram preenchidos
$verificavar = $verifica;
var_dump($verificavar);

// Se a quantidade for menor que 2, informa erro de envio
if ($verifica <= 2) {

  // Se a quantidade for maior ou igual a 2, verifica se as matrículas já fazem parte de algum grupo,
  // Pra verificar a gente precisa consultar os grupos ja criados no bd,
  // Aqui uso um grupo qualquer por que o banco nao ta pronto...
  $grupos = array(
    array("121212", "162570", "161616","162575"),
    array("987654", "456789", "123789", "123789"),
    array("147258", "369852", "741852","123758")
  );

  // Crio uma variável para armazenar se há erro de duplicidade ou não
  $duplicidade = false;

  // Uso o foreach pra verificar cada uma matrícula enviada pelo formulário
  foreach ($matriculas as $matricula) {
    // Depois uso de novo pra verificar cada grupo existente
    foreach ($grupos as $grupo) {
      // Aqui uso o in_array pra verifica se a matrícula está no grupo
      if (in_array($matricula, $grupo)) {
        //Caso tenha matricula em "grupos" da erro de duplicidade e muda a variável para true
        header('location: index.php?erro=dadosduplicados');
        $duplicidade = true;
      }
    }
  }

  // Se não houver erro de duplicidade, prossegue para a página auth.php
  if (!$duplicidade) {
    // Vai para a pagina formulario
    header('location: formulario.php');
  }

} else {
  header('location: index.php?erro=dadoserrado');
  
}
?>
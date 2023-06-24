<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expociencia-CAV</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Responsivo-->
    <h1>ExpoCiencia</h1>
    <h2>Informe as Matriculas do seu grupo</h2>

    <!-- Cria o formulário com quatro inputs de matrícula -->
    <form action="auth.php" method="post"> <?php    
            if (isset($_GET['erro'])) {
              if ($_GET['erro'] == "dadoserrado"){
                 echo "
                 <style>
                 u{
                    color: #ff0000;
                }
                </style>
                <u>Erro de envio: é necessário preencher pelo menos 2 campos de matrícula!</u>"; 
            }
                if ($_GET['erro'] == "dadosduplicados"){
                   
                    echo "
                 <style>
                 u{
                    color: #ff0000;
                }
                </style>
                <u>Erro de duplicidade: Uma ou mais matrículas já fazem parte de um grupo.</u><br>";     
            }  
            }
            ?>
        <label for="matricula1">Matrícula 1:</label>
        <input type="text" id="matricula1" name="matricula1" /><br>
        <label for="matricula2">Matrícula 2:</label>
        <input type="text" id="matricula2" name="matricula2" /><br>
        <label for="matricula3">Matrícula 3:</label>
        <input type="text" id="matricula3" name="matricula3" /><br>
        <label for="matricula4">Matrícula 4:</label>
        <input type="text" id="matricula4" name="matricula4" /><br>
        <button type=" submit" name="submit">Cadastrar</button>
    </form>

</body>

</html>
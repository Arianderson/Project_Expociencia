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
    <form action="authforms.php" method="post"> <?php    
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
        <label for="matricula1">Nome:</label>
        <input type="text" id="nome" name="nome" /><br />
        <label for="serie">Série:</label>
        <input type="text" id="serie" name="serie" /><br>
        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma" /><br>
        <label for="tamcamisa">Tam.Camisa:</label>
        <select name="tamanho_camisa" id="tamanho_camisa">
            <option value="null" selected>Selecione</option>
            <option value="1">PP</option>
            <option value="2">P</option>
            <option value="3">M</option>
            <option value="4">G</option>
            <option value="5">GG</option>
        </select>
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" /><br>
        <label for="">Tipo do Standy</label>
        <select name="tpstandy" id="tpstandy">
            <option value="1">Duplo</option>
            <option value="2">Simples</option>
        </select>
        <button type=" submit" name="submit">Cadastrar</button>
    </form>

</body>

</html>
<?php

if(isset($_POST['nome'])){
 $arquivo = fopen("dados.txt", "a");
 fwrite($arquivo, "nome: " . $_POST['nome'] . "\n");
 fclose($arquivo);
 }
 if(isset($_POST['votow'])){
    $voto = fopen("voto.txt", "a");
    fwrite($voto, "Voto: Laranja" . "\n");
    fclose($voto);
 }

 if(isset($_POST['votot'])){
    $voto = fopen("voto.txt", "a");
    fwrite($voto, "Voto: Verde". "\n");
    fclose($voto);
 }

?>

<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulario</title>
 </head>
<body>
    <form name="dados_pessoas" method="POST" action="result.php">
    𝐍𝐨𝐦𝐞:<input type="text" name="nome" id="nome" required><br>
        <br>𝒱𝑜𝓉𝒶çã𝑜 𝒹𝑒 𝒞𝑜𝓇𝑒𝓈:<br>

        𝐋𝐚𝐫𝐚𝐧𝐣𝐚 <input type="radio" name="votow" id="votow"><br>
        𝐕𝐞𝐫𝐝𝐞 <input type="radio" name="votot" id="votot"><br>
        <div class="mb-3">
           <input class="btn btn-lg btn-success" style="background-color: rgb(65,105,225);" type="submit" name="Cadastrar" value="Continuar">
        </div>
           
    </form>
</body>
</html>
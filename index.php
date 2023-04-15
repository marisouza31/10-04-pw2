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
<body style="background-color: <?php if(isset($_POST['nome'])){echo '#FF4500'; }else{ echo 'f3f3f3'; }?>">
    <form name="dados_pessoas" method="POST" action="">
        Nome:<input type="text" name="nome" id="nome" required><br>
        <br>Votacao:<br>

        Laranja: <input type="radio" name="votow" id="votow"><br>
        Verde: <input type="radio" name="votot" id="votot"><br>
      <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
    </form>
</body>
</html>
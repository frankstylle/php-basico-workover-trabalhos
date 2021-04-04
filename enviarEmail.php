<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 26 de PHP - Enviando EMAILs</title>
</head>

<body>

    <form name="email" method="post" action="aula26_dados.php">
        <label for="">e-mail</label><br/>
        <input type="text" name="email_txt"><br/>
        <label for="">Assunto</label><br/>
        <input type="text" name="assunto_txt"><br/>
        <label for="">Mensagem</label><br/>
        <textarea name="msg_txt" rows="5" cols="50"></textarea><br/><br/>
        <input type="submit" value="enviar"/>
    </form>

</body>

</html>

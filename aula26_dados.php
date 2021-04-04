<?php
                        // PAGINA APOS CLICAR EM ENVIAR DA PAGINA DE EnviarEmail - USANDO MAIL PARA ENVIO DE EMAIL
    $vmail = $_POST['email_txt'];
    $vassunto = $_POST['assunto_txt'];
    $vmsg = $_POST['msg_txt'];
                        // OPÇÔES DE CABEÇALHOS: Cc Bcc  Comments Content-Type:text/html Date 
    if(mail($vmail,$vassunto,$vmsg,"Reply-To:franksilva@outlook.com")){  
        echo "Mensagem enviada!";
        echo "<a href=aula26.php target=_self>voltar</a>";
    }else{
        echo "Erro ao Enviar, tente novamente!";
    }


?>

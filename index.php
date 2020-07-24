<?php
    include "servicos/servicoMensagemSessao.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de inscriçao</title>
    </head>

    <body>
        <p>FORMULARIO PARA A INCRIÇAO DE COMPETIDORES</p>

        <form action="script.php" method="post">
            <?php
                $mensagemDeSucesso = obterMensagemSucesso();
                if(!empty($mensagemDeSucesso))
                {
                    echo $mensagemDeSucesso;
                }

                $mensagemDeErro = obterMensagemErro();
                if(!empty($mensagemDeErro))
                {
                    echo $mensagemDeErro;
                }
            ?>

            <p>Seu nome: <input type="text" name="nome"/></p>
            <p>Sua idade: <input type="text" name="idade"/></p>
            <p><input type="submit" value="Enviar dados do competidor"/> </p>
        </form>
    
    
    </body>

</html>
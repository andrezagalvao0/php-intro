<?php
    session_start();
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
                $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : ' ' ;// a ? seria o if, caso seja true//se minha sessao na chave 'mensagem de erro' tiver um valor iniciado eu quero mostrar ele
                if(!empty($mensagemDeSucesso))
                {
                    echo $mensagemDeSucesso;
                }

                $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : ' ' ;// a ? seria o if, caso seja true//se minha sessao na chave 'mensagem de erro' tiver um valor iniciado eu quero mostrar ele
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
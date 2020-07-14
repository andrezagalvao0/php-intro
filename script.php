<?php

session_start();

$categoria = ['infantil', 'adolescente', 'adulto', 'idoso']; //array numerico


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'Nome nao pode ser vazio, por favor preencha'; //$SESSION[''] array associativo(associar um valor a uma chave, que por sua vez nao necessariamente sera numerica)
    header('location: index.php'); //isso faz com que a mensagem de erro seja exibida na mesma pagina(se der algum tipo de erro ele vai redirecionar para a pagina index.php)
    return;

}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome nao pode ter menos que 3 caracteres';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome nao pode ter mais que 40 caracteres';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade';
    header('location: index.php');
    return;
    
}


if($idade >= 6  && $idade <= 12)
{
    for ($i =0; $i <= count($categoria); $i++){
        if($categoria[$i] == 'infantil')
        {
            $SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categoria[$i];
            header("location: index.php");
            return;
        }
    }
    
} else if($idade >= 13 && $idade <= 18)
{
    for ($i =0; $i <= count($categoria); $i++)   
        if($categoria[$i] == 'adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] = "A nadadora " .$nome. " compete na categoria " .$categoria[$i];
            header("location: index.php");
            return;
        }
    

}else if($idade >= 19 && $idade <= 50)
{
    for ($i =0; $i <= count($categoria); $i++)   
        if($categoria[$i] == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = "A nadadora " .$nome. " compete na categoria " .$categoria[$i];
            header("location: index.php");
            return;
        }
        

} else{
    $_SESSION['mensagem-de-sucesso'] = " A nadadora " .$nome. " compete na categoria idoso";
    header("location:index.php");
    return;
}

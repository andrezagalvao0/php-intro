<?php

session_start();

$categoria = ['infantil', 'adolescente', 'adulto', 'idoso']; //array numerico


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'Nome nao pode ser vazio, por favor preencha'; //$SESSION[''] array associativo(associar um valor a uma chave, que por sua vez nao necessariamente sera numerica)
    header('location: index.php'); //isso faz com que a mensagem de erro seja exibida na mesma pagina(se der algum tipo de erro ele vai redirecionar para a pagina index.php)

}

if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome nao pode ter menos que 3 caracteres';
    header('location: index.php');
}

if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome nao pode ter mais que 40 caracteres';
    header('location: index.php');
}

if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'So eh permitido valores numericos';
    header('location: index.php');
    
}

if($idade >= 6  && $idade <= 12)
{
    for ($i =0; $i <= count($categoria); $i++){
        if($categoria[$i] == 'infantil')
        echo "O nadador " .$nome. " compete na categoria " .$categoria[$i];
    }
    
} else if($idade >= 13 && $idade <= 18)
{
    for ($i =0; $i <= count($categoria); $i++)   
    if($categoria[$i] == 'adolescente')
    echo("A nadadora " .$nome. " compete na categoria " .$categoria[$i]);

}else if($idade >= 19 && $idade <= 50)
{
    for ($i =0; $i <= count($categoria); $i++)   
    if($categoria[$i] == 'adulto')
    echo("A nadadora " .$nome. " compete na categoria " .$categoria[$i]);

} else{
    echo("A nadadora " .$nome. " compete na categoria idoso");
}

<?php

session_start();

$categoria = []; //array numerico
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

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


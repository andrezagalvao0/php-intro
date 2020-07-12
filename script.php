<?php

$categoria = ['infantil', 'adolescente', 'adulto', 'idoso'];


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'Nome nao pode ser vazio';
    return;
}

if(strlen($nome) < 3){
    echo 'O nome nao pode ter menos que 3 caracteres';
    return;
}

if(strlen($nome) > 40){
    echo 'O nome nao pode ter mais que 40 caracteres';
    return;
}

if(!is_numeric($idade)){
    echo 'So eh permitido valores numericos';
    return;
}

if($idade >= 6  && $idade <= 12)
{
    echo("A nadadora " .$nome. " compete na categoria infantil");
} else if($idade >= 13 && $idade <= 18)
{
    echo("A nadadora " .$nome. " compete na categoria adolescente");
}else if($idade >= 19 && $idade <= 50)
{
    echo("A nadadora " .$nome. " compete na categoria adulto");
} else{
    echo("A nadadora " .$nome. " compete na categoria idoso");
}

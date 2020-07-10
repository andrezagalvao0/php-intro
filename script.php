<?php

$categoria = ['infantil', 'adolescente', 'adulto', 'idoso'];


$nome = $_POST['nome'];
$idade = $_POST['idade'];

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

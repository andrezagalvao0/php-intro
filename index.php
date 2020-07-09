<?php

$categoria = ['infantil', 'adolescente', 'adulto', 'idoso'];


$nome = 'Andreza';
$idade = 56;

if($idade >= 6  && $idade <= 12)
{
    echo('Infantil');
} else if($idade >= 13 && $idade <= 18)
{
    echo('adolescente');
}else if($idade >= 19 && $idade <= 50)
{
    echo('adulto');
} else{
    echo("A nadadora " .$nome. " compete na categoria idoso");
}

<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categoria = [];  //string numerica
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';
    $categoria[] = 'idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade >= 6  && $idade <= 12)
        {
            for ($i =0; $i <= count($categoria); $i++){
                if($categoria[$i] == 'infantil')
                {
                    setarMensagemSucesso("O nadador " .$nome. " compete na categoria " .$categoria[$i]);
                    return null;
                }
            }
        
        } else if($idade >= 13 && $idade <= 18)
        {
            for ($i =0; $i <= count($categoria); $i++)   
            {
                if($categoria[$i] == 'adolescente')
                {
                    setarMensagemSucesso ("A nadadora " .$nome. " compete na categoria " .$categoria[$i]);
                    return null;
                }
            }
                
        

        }else if($idade >= 19 && $idade <= 50)
        {
            for ($i =0; $i <= count($categoria); $i++)   
            {
                if($categoria[$i] == 'adulto')
                {
                    setarMensagemSucesso ("A nadadora " .$nome. " compete na categoria " .$categoria[$i]);
                    return null;
                }
            } 

        } else{
        removerMensagemSucesso();
        return obterMensagemErro();
        }

    }
}
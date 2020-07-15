<?php
//serviço para validar dados
function validaNome(string $nome): bool //o bool eu to espefificando o tipo de retorno que a função vai ter
{
    if(empty($nome))
    {
        setarMensagemErro('O nome nao pode ser vazio. Por favor preencha-o'); 
        return false;
    
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro('O nome nao pode ter menos que 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('O nome nao pode ter mais que 40 caracteres');
        return false;
    }
    return true;

}

function validaIdade(string $idade)  : bool
{

    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um número para a idade');
        return false;
    }
    return true;
}



 


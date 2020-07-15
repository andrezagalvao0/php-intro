<?php

//serviço que vai setar msg de erro e sucesso. obter msg de erro e sucesso
//este arquivo gerencia mensagens que são exibidas dentro da sessão; //ecncapsular a mensagem 

session_start(); //tem isso porque esse arquivo trabalha com sessão

function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

//resgatar mensagem
function obterMensagemSucesso() : ?string //?-dado a situação o metodo pode retornar string ou null
{
    if(isset($_SESSION['mensagem-de-sucesso'])) //o isset - ver se a mensagem de sucesso foi setada
        return $_SESSION['mensagem-de-sucesso'];

    return null; //caso nao esteja setada
}


//função para sentar mensagens de erro
function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

//vai obter mensagem
function obterMensagemErro() : ?string //?-dado a situação o metodo pode retornar string ou null
{
    if(isset($_SESSION['mensagem-de-erro'])) //o isset - ver se a mensagem de erro foi setada
        return $_SESSION['mensagem-de-erro'];

    return null; //caso nao esteja setada
}


function removerMensagemSucesso() : void
{
    if(isset($_SESSION['mensagem-de-sucesso'])) 
        unset($_SESSION['mensagem-de-sucesso']);
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['mensagem-de-erro'])) // se a msg de erro tiver setada
        unset($_SESSION['mensagem-de-erro']); //a gente vai eliminar ela
}

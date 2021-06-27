<?php

/*Criando um serviço de validação para colocar todos os dados de validação dentro de uma
  função, tornando o código mais organizado e fácil de fazer manutenção.*/
  

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro( mensagem: 'O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }   
    else if (strlen($nome) < 3)
    {
        setarMensagemErro( mensagem: 'O nome não pode conter menos que 3 caracteres');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro( mensagem: 'O nome não pode conter mais que 40 caracteres');
        return false;
    }
    return true;    
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro( mensagem:'Informe um número para idade');
        return false;
    }
    return true;
}

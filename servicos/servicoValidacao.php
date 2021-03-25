<?php

function validaNome(string $nome) : bool{
    if(empty($nome)){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente';
        return false;
        
    } else if(strlen($nome)<3){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
        header('location:index.php');
        return false;
        
    } else if(strlen($nome)>40){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
        header('location:index.php');
        return false;
    }
    return true;
}

function validaIdade(string $idade){
    else if(!is_numeric($idade)){
        $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
        header('location:index.php');
        return;
    }
}

 
<?php

    /*
    A) Crie o cadastro do cliente e armazene os seguintes dados em variáveis: Nome, Idade, Endereço, Email.
    B) Verifique se cada cliente é de idade maior. Se for maior que 17 anos escreva "O cliente 'NOME' é de maior"
    */

    #Cliente:

    $nome = "MARIA";
    $idade = 18;
    $endereco = "vila rural cruzeirinho";
    $email = "dudamarquessantos14@gmail.com";

    if($idade > 17){
        echo "O Cliente $nome é maior de idade.";
    } else {
        echo "O Cliente $nome não é maior de idade";
    }
    
?>
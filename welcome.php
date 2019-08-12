<?php

    $_SERVER["REQUEST_METHOD"] == "POST";

        $nome = $_POST ["nome"];
        $idade = $_POST ["idade"];
        $email = $_POST ["email"];
        $endereco = $_POST ["endereco"];
        $sexo = $_POST ["sexo"];

    echo "Olá " .$nome;

    if($sexo == "M"){
        echo ", Seja Bem Vindo";
    }elseif($sexo == "O"){
        echo ", Seja Bem Vindo(a)";
    }else{
        echo ", Seja Bem Vinda";
    }

?>
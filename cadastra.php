<?php
    $conexao = mysqli_connect("localhost","id10374988_crudpizza","crudpizza","id10374988_crudpizza");
    //                  onde esta o banco    usuario banco          senha        nome banco de dados

    $sabor = $_POST['sabor'];
    $valor = $_POST['valor'];

    $query = "insert into tb_pizza values (null,'$sabor',$valor)";

    mysqli_query($conexao,$query);

    echo "Registro Salvo com Sucesso!";

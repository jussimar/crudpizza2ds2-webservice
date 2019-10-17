<?php
    $conexao = mysqli_connect("localhost","id10374988_crudpizza","crudpizza","id10374988_crudpizza");
    //                  onde esta o banco    usuario banco          senha        nome banco de dados

    $codigo = $_POST['codigo'];

    $query = "delete from tb_pizza where cd_pizza = $codigo";

    mysqli_query($conexao,$query);

    echo "Registro alterado com Sucesso!";

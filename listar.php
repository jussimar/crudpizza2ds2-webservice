<?php
    $conexao = mysqli_connect("localhost","id10374988_crudpizza","crudpizza","id10374988_crudpizza");
    //                  onde esta o banco    usuario banco          senha        nome banco de dados

    $query = "SELECT * FROM tb_pizza order by ds_sabor";

    $result = mysqli_query($conexao,$query);

    $registro = array(
      'pizzas'=>array()
    );

    $i=0;

    while($linha = mysqli_fetch_assoc($result)){
      $registro['pizzas'][$i] = array(
            'codigo' => $linha['cd_pizza'],
            'sabor' => $linha['ds_sabor'],
            'valor' => $linha['vl_pizza']
      );
      $i++;
    }

    echo json_encode($registro);

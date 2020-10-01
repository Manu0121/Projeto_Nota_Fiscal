<?php

    include 'conecta.php';
    echo "<br><hr>";
    session_start();
    $data = $_SESSION['data'];
    $total = $_GET['total'];

    echo "NF: ".$codnf."<br>";
    echo "Total: ".$total."<br>";

    $consulta = $conexao -> prepare(

        "INSERT INTO `nota_fiscal`(`data`, `total`
         ) VALUES ('$data','$total')");

    $consulta -> execute();

    header ('Location: index.php');











?>
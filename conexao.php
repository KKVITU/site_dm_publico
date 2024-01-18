<?php

$host = "localhost";
$usuario = "dmar9896_root";
$senha = "Dm@Armas";
$banco = "dmar9896_bd_dados";

$link = mysqli_connect($endereco, $usuario, $senha, $banco);

mysqli_select_db($link, $banco) or die("não foi possivel conectar ao banco");
<?php

$endereco = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_dados";

$link = mysqli_connect($endereco, $usuario, $senha, $banco);

mysqli_select_db($link, $banco) or die("não foi possivel conectar ao banco");
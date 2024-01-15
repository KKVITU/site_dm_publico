<?php
header("Refresh: 0; url=home.php");

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_dados";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$nome_cliente = strtoupper($_POST['nome_cliente']);
$naturalidade = ucfirst($_POST['naturalidade']);
$dt_nasc = $_POST['dt_nasc'];
$profissao = ucfirst($_POST['profissao']);
$identidade = $_POST['identidade'];
$nacionalidade = ucfirst($_POST['nacionalidade']);
$oex_identidade = strtoupper($_POST['oex_identidade']);
$estado_civil = ucfirst($_POST['estado_civil']);
$cpf = $_POST['cpf'];
$rua = ucfirst($_POST['rua']);
$cep = $_POST['cep'];
$num_casa = $_POST['num_casa'];
$cidade = ucfirst($_POST['cidade']);
$uf = strtoupper($_POST['uf']);
$pnt_refer = ucfirst($_POST['pnt_refer']);
$tel_Contato = $_POST['tel_Contato'];
$cel_Contato = $_POST['cel_Contato'];

$sql = "INSERT INTO Cliente (nome_cliente, nacionalidade, naturalidade, data_nascimento, profissao, estado_civil, identidade, orgao_expedidor, cpf, rua, cep, numero_casa, cidade, uf, ponto_referencia, telefone_contato, celular_contato)
        VALUES ('$nome_cliente', '$nacionalidade', '$naturalidade', '$dt_nasc', '$profissao', '$estado_civil', '$identidade', '$oex_identidade', '$cpf', '$rua', '$cep', '$num_casa', '$cidade', '$uf', '$pnt_refer', '$tel_Contato', '$cel_Contato')";

if ($conexao->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conexao->error;
}

$conexao->close();

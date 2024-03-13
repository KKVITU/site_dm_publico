<?php
header("Refresh: 0; url=home.php");

// $host = "localhost";
// $usuario = "dmar9896_root";
// $senha = "Dm@Armas";
// $banco = "dmar9896_bd_dados";

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_dados";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

//dados cliente
$nome_cliente = strtoupper($_POST['nome_cliente']);
$naturalidade = ucfirst($_POST['naturalidade']);
$dt_nasc = $_POST['dt_nasc'];
$profissao = ucfirst($_POST['profissao']);
$identidade = $_POST['identidade'];
$nacionalidade = ucfirst($_POST['nacionalidade']);
$oex_identidade = strtoupper($_POST['oex_identidade']);
$estado_civil = ucfirst($_POST['estado_civil']);
$cpf = $_POST['cpf'];

//endereço cliente
$rua = ucfirst($_POST['rua']);
$cep = $_POST['cep'];
$num_casa = $_POST['num_casa'];
$cidade = ucfirst($_POST['cidade']);
$bairro = ucfirst($_POST['bairro']);
$uf = strtoupper($_POST['uf']);
$cel_Contato = $_POST['cel_Contato'];

//parte do imovel do proprietario
$imovel_status = $_POST['imovel_status'];

if ($imovel_status == 1) {
    $nome_proprietario = strtoupper($_POST['nome_proprietario']);
    $dt_nasc_proprietario = $_POST['dt_nasc_proprietario'];
    $identidade_proprietario = $_POST['identidade_proprietario'];
    $nacionalidade_proprietario = ucfirst($_POST['nacionalidade_proprietario']);
    $oex_identidade_proprietario = strtoupper($_POST['oex_identidade_proprietario']);
    $cpf_proprietario = $_POST['cpf_proprietario'];
} else {
    $nome_proprietario = '';
    $dt_nasc_proprietario = '';
    $identidade_proprietario = '';
    $nacionalidade_proprietario = '';
    $oex_identidade_proprietario = '';
    $cpf_proprietario = '';
}


$sql = "INSERT INTO Cliente (
    nome_cliente, nacionalidade, naturalidade, data_nascimento, 
    profissao, estado_civil, identidade, orgao_expedidor, cpf, 
    rua, cep, numero_casa, cidade, uf, celular_contato, bairro, 
    imovel_status, nome_proprietario, dt_nasc_proprietario,
    identidade_proprietario, nacionalidade_proprietario, 
    oex_identidade_proprietario, cpf_proprietario
) VALUES (
    '$nome_cliente', '$nacionalidade', '$naturalidade', '$dt_nasc', 
    '$profissao', '$estado_civil', '$identidade', '$oex_identidade', '$cpf', 
    '$rua', '$cep', '$num_casa', '$cidade', '$uf', '$cel_Contato', '$bairro', 
    '$imovel_status', '$nome_proprietario', '$dt_nasc_proprietario',
    '$identidade_proprietario', '$nacionalidade_proprietario', 
    '$oex_identidade_proprietario', '$cpf_proprietario'
)";

if ($conexao->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conexao->error;
}

$conexao->close();

<?php
header("Refresh: 0; url=home.php");

$host = "localhost";
$usuario = "dmar9896_root";
$senha = "Dm@Armas";
$banco = "dmar9896_bd_dados";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$id = $_POST['id'];
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
$bairro = ucfirst($_POST['bairro']);
$uf = strtoupper($_POST['uf']);
$cel_Contato = $_POST['cel_Contato'];

$sql = "UPDATE cliente SET 
            nome_cliente='$nome_cliente', 
            naturalidade='$naturalidade', 
            data_nascimento='$dt_nasc', 
            profissao='$profissao', 
            identidade='$identidade', 
            nacionalidade='$nacionalidade', 
            orgao_expedidor='$oex_identidade', 
            estado_civil='$estado_civil', 
            cpf='$cpf', 
            rua='$rua', 
            cep='$cep', 
            numero_casa='$num_casa', 
            cidade='$cidade', 
            bairro='$bairro', 
            uf='$uf', 
            celular_contato='$cel_Contato' 
        WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "Salvou";
} else {
    echo "Error updating record: " . $conexao->error;
}

$conexao->close();

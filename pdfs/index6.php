<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$id = $_GET['id'];

include('../conexao.php');

$select = "SELECT * FROM cliente WHERE id = $id";
$result = mysqli_query($link, $select);
foreach ($result as $linha) {
    //dados cliente
    $id = $linha['id'];
    $nome_cliente = $linha['nome_cliente'];
    $naturalidade = $linha['naturalidade'];
    $nacionalidade = $linha['nacionalidade'];
    $estado_civil = $linha['estado_civil'];
    $data_nascimento = date('d/m/Y', strtotime($linha['data_nascimento']));
    $profissao = $linha['profissao'];
    $identidade = $linha['identidade'];
    $orgao_expedidor = $linha['orgao_expedidor'];
    $cpf = $linha['cpf'];
    $rua = $linha['rua'];
    $cep = $linha['cep'];
    $numero_casa = $linha['numero_casa'];
    $cidade = $linha['cidade'];
    $bairro = $linha['bairro'];
    $uf = $linha['uf'];
    $celular_contato = $linha['celular_contato'];

    //dados proprietario
    $nome_proprietario = $linha['nome_proprietario'];
    $dt_nasc_proprietario = date('d/m/Y', strtotime($linha['dt_nasc_proprietario']));
    $identidade_proprietario = $linha['identidade_proprietario'];
    $nacionalidade_proprietario = $linha['nacionalidade_proprietario'];
    $oex_identidade_proprietario = $linha['oex_identidade_proprietario'];
    $cpf_proprietario = $linha['cpf_proprietario'];
}

$mesesPorExtenso = [
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro',
];

date_default_timezone_set('America/Fortaleza');

$dataAtual = new DateTime();

$dia = $dataAtual->format('d');
$numeroMes = (int)$dataAtual->format('m');
$ano = $dataAtual->format('Y');

$mesPorExtenso = $mesesPorExtenso[$numeroMes];

$dataFormatada = $dia . ' de ' . $mesPorExtenso . ' de ' . $ano;


$dompdf = new Dompdf();

$html = '
    
    <body style="border: 2px solid #000; padding: 50px; box-sizing: border-box; margin: 0;">

    <div style="text-align: center; margin: 0 auto; width: 90%;">
        <p><b>DECLARAÇÃO DE RESIDÊNCIA</b></p>

        <p style="margin-bottom: 40px; text-align: left; margin-top: 50px">Eu, <b>' . $nome_proprietario . '</b>, ' . $nacionalidade_proprietario . '(a) , nascido(a) em ' . $dt_nasc_proprietario . ', inscrito(a) no CPF sob o nº <b>' . $cpf_proprietario . '</b>.<br>
        <b>DECLARO</b>, perante o exército Brasileiro, que <b>' . $nome_cliente . '</b>, RG nº <b>' . $identidade . '</b> e CPF nº <b>' . $cpf . '</b>,reside e é domiciliado em minha casa, no seguinte endereço <b>' . $rua . ', ' . $numero_casa . ', CEP ' . $cep . ', ' . $bairro . ' – ' . $cidade . ' – ' . $uf . '.</b>, cujo comprovante de endereço se encontra em meu nome, conforme seguem em anexo a esta declaração.</p>

        <p style="margin-bottom: 40px; text-align: left; margin-top: 50px">Por ser verdade afirmo.</p>


        <p style="margin-top: 150px; text-align: right;">São Luís – MA, ' . $dataFormatada . '.</p>
    </div>

    <div style="position: absolute; bottom: 0; width: 100%; text-align: center; left: 50%; transform: translateX(-50%); margin-bottom: 30px">
        <p>____________________________________________________</p>
        <p><b>' . $nome_proprietario . '</b></p>
        <p>CPF. <b>' . $cpf_proprietario . '</b></p>
    </div>
</body>
';
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream("DECLARAÇÃO DE RESIDÊNCIA.pdf", array("Attachment" => false));

<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$dompdf = new Dompdf();

$id = $_GET['id'];

include('../conexao.php');

$select = "SELECT * FROM cliente WHERE id = $id";
$result = mysqli_query($link, $select);
foreach ($result as $linha) {
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
    $uf = $linha['uf'];
    $ponto_referencia = $linha['ponto_referencia'];
    $telefone_contato = $linha['telefone_contato'];
    $celular_contato = $linha['celular_contato'];
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

$dataFormatada = $dia .' de '. $mesPorExtenso .' de '. $ano;


$html = '
    <body style="border: 2px solid #000; padding: 50px; box-sizing: border-box; margin: 0;">

        <div style="text-align: center; margin: 0 auto; width: 90%;">
            <p><b>DECLARAÇÃO DE GUARDA DO ACERVO.</b></p>

            <p style="margin-bottom: 40px; text-align: left; margin-top: 50px">Eu, <b>' . $nome_cliente . '</b>, ' . $nacionalidade . ', ' . $estado_civil . ', natural de ' . $naturalidade . ', nascido em ' . $data_nascimento . ', ' . $profissao . ', portador da carteira de identidade nº <b>' . $identidade . '</b> ' . $orgao_expedidor . ', inscrito no CPF sob o nº <b>' . $cpf . '</b>, residente e domiciliado na <b>' . $rua . ', ' . $numero_casa . ', CEP ' . $cep . ', ' . $ponto_referencia . ' – ' . $cidade . ' – ' . $uf . '.</b></p>

            <p style="margin-bottom: 40px; text-align: left;"><b>DECLARO</b>, para fim de Concessão de Certificado de Registro no Exército Brasileiro, que o local de guarda do meu acervo de Atirador Desportivo, será no mesmo local solicitado no presente apostilamento de endereço, localizado na residente e domiciliado na <b>' . $rua . ', ' . $numero_casa . ', CEP ' . $cep . ', ' . $ponto_referencia . ' – ' . $cidade . ' – ' . $uf . '.</b></p>

            <p style="margin-top: 150px; text-align: right;">São Luís – MA,  '.$dataFormatada.'.</p>
        </div>

        <div style="position: absolute; bottom: 0; width: 100%; text-align: center; left: 50%; transform: translateX(-50%); margin-bottom: 30px">
            <p>____________________________________________________</p>
            <p><b>' . $nome_cliente . '</b></p>
            <p>CPF. <b>' . $cpf . '</b></p>
        </div>
    </body>
';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream("DECLARAÇÃO_DE_GUARDA_DO_ACERVO.pdf", array("Attachment" => false));

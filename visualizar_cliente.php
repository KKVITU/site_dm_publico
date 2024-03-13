<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DM Armas Ltda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #555;
        }

        .navbar-nav {
            margin: auto;
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link {
            color: white;
            transition: background-color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: white;
            background-color: #333;
        }

        .active {
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a style="cursor: pointer;color: white" class="navbar-brand" href="#">DM Armas Ltda</a>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: -100px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="cadastrar_cliente.php">Cadastrar Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div style="max-width:100%; " class="table-overflow">

                                    <?php
                                    include('conexao.php');
                                    $id = $_GET['id'];
                                    $select = "SELECT * FROM cliente WHERE id = $id";
                                    $result = mysqli_query($link, $select);
                                    foreach ($result as $linha) {
                                        //dados do cliente
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
                                        $bairro = $linha['bairro'];
                                        $cidade = $linha['cidade'];
                                        $uf = $linha['uf'];
                                        $ponto_referencia = $linha['ponto_referencia'];
                                        $telefone_contato = $linha['telefone_contato'];
                                        $celular_contato = $linha['celular_contato'];

                                        //dados proprietario
                                        $imovel_status = $linha['imovel_status'];
                                        $nome_proprietario = $linha['nome_proprietario'];
                                        $dt_nasc_proprietario = date('d/m/Y', strtotime($linha['dt_nasc_proprietario']));
                                        $identidade_proprietario = $linha['identidade_proprietario'];
                                        $nacionalidade_proprietario = $linha['nacionalidade_proprietario'];
                                        $oex_identidade_proprietario = $linha['oex_identidade_proprietario'];
                                        $cpf_proprietario = $linha['cpf_proprietario'];
                                    }

                                    ?>
                                    <form id="form_avisos" class="needs-validation" novalidate method="POST" action="processa_cliente.php">
                                        <div class="row">

                                            <h2 for="Endereço">Dados Pessoais:</h2>
                                            <!-- Dados Pessoais -->
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Nome Do Cliente:</label>
                                                    <input disabled class="form-control" value="<?php echo $nome_cliente ?>" type="text" placeholder="" name="nome_cliente" id="nome_cliente">
                                                    <div class="invalid-feedback">
                                                        Insira o Nome Do Cliente
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Nacionalidade:</label>
                                                    <input disabled class="form-control" value="<?php echo $nacionalidade ?>" type="text" placeholder="" name="nacionalidade" id="nacionalidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Nacionalidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Naturalidade:</label>
                                                    <input disabled class="form-control" value="<?php echo $naturalidade ?>" type="text" placeholder="" name="naturalidade" id="naturalidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Naturalidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Data de Nascimento:</label>
                                                    <input disabled class="form-control" value="<?php echo $linha['data_nascimento'] ?>" type="date" placeholder="" name="dt_nasc" id="dt_nasc">
                                                    <div class="invalid-feedback">
                                                        Insira a data de Nascimento
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Estado Civil:</label>
                                                    <select disabled class="form-control" id="estado_civil" name="estado_civil">
                                                        <option value="solteiro" <?php if ($estado_civil == 'Solteiro') echo 'selected'; ?>>Solteiro</option>
                                                        <option value="casado" <?php if ($estado_civil == 'Casado') echo 'selected'; ?>>Casado</option>
                                                        <option value="separado" <?php if ($estado_civil == 'Separado') echo 'selected'; ?>>Separado</option>
                                                        <option value="divorciado" <?php if ($estado_civil == 'Divorciado') echo 'selected'; ?>>Divorciado</option>
                                                        <option value="viuvo" <?php if ($estado_civil == 'Viuvo') echo 'selected'; ?>>Viúvo</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Profissão:</label>
                                                    <input disabled class="form-control" value="<?php echo $profissao ?>" type="text" placeholder="" name="profissao" id="profissao">
                                                    <div class="invalid-feedback">
                                                        Insira a Profissão
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Identidade:</label>
                                                    <input disabled class="form-control" value="<?php echo $identidade ?>" type="text" placeholder="" name="identidade" id="identidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Identidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Orgão Expedidor:</label>
                                                    <input disabled class="form-control" value="<?php echo $orgao_expedidor ?>" type="text" placeholder="" name="oex_identidade" id="oex_identidade">
                                                    <div class="invalid-feedback">
                                                        Insira o Orgão Expedidor
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">CPF:</label>
                                                    <input disabled class="form-control" value="<?php echo $cpf ?>" type="text" placeholder="" name="cpf" id="cpf" maxlength="14" oninput="formatarCPF(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o CPF
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2 for="Endereço">Endereço:</h2>

                                        <div class="row">
                                            <!-- Endereço -->
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Rua:</label>
                                                    <input disabled class="form-control" value="<?php echo $rua ?>" type="text" placeholder="" name="rua" id="rua">
                                                    <div class="invalid-feedback">
                                                        Insira a Rua
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Bairro:</label>
                                                    <input disabled class="form-control" value="<?php echo $bairro ?>" type="text" placeholder="" name="bairro" id="bairro">
                                                    <div class="invalid-feedback">
                                                        Insira o Bairro
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">CEP:</label>
                                                    <input disabled class="form-control" value="<?php echo $cep ?>" type="text" placeholder="" name="cep" id="cep" maxlength="9" oninput="formatarCEP(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o CEP
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Número da Casa:</label>
                                                    <input disabled class="form-control" value="<?php echo $numero_casa ?>" type="text" placeholder="" name="num_casa" id="num_casa">
                                                    <div class="invalid-feedback">
                                                        Insira o Número da Casa
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Cidade:</label>
                                                    <input disabled class="form-control" value="<?php echo $cidade ?>" type="text" placeholder="" name="cidade" id="cidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Cidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">UF:</label>
                                                    <input disabled class="form-control" value="<?php echo $uf ?>" type="text" placeholder="" name="uf" id="uf">
                                                    <div class="invalid-feedback">
                                                        Insira o UF
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Ponto de Referência:</label>
                                                    <input disabled class="form-control" value="<?php echo $ponto_referencia ?>" type="text" placeholder="" name="pnt_refer" id="pnt_refer">
                                                    <div class="invalid-feedback">
                                                        Insira o Ponto de Referência
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Telefone de contato:</label>
                                                    <input disabled class="form-control" value="<?php echo $telefone_contato ?>" type="text" maxlength="14" placeholder="" name="tel_Contato" id="tel_Contato" oninput="formatarTelefone(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o Telefone de contato
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Celular de contato:</label>
                                                    <input disabled class="form-control" value="<?php echo $celular_contato ?>" type="text" maxlength="14" placeholder="" name="cel_Contato" id="cel_Contato" oninput="formatarCelular(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o Celular de contato
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="ownerDetails" style="<?php echo ($imovel_status == 1) ? 'display: block;' : 'display: none;'; ?>">
                                                <div class="row">

                                                    <h2 for="Endereço">Dados do Proprietario do imóvel:</h2>
                                                    <!-- Dados Pessoais do proprietario -->
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Nome Do proprietario:</label>
                                                            <input disabled class="form-control" value="<?php echo $nome_proprietario ?>" type="text" placeholder="" name="nome_proprietario" id="nome_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira o Nome Do proprietario
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Nacionalidade:</label>
                                                            <input disabled class="form-control" value="<?php echo $nacionalidade_proprietario ?>" type="text" placeholder="" name="nacionalidade_proprietario" id="nacionalidade_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira a Nacionalidade
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Data de Nascimento:</label>
                                                            <input disabled class="form-control" value="<?php echo $linha['dt_nasc_proprietario'] ?>" type="date" placeholder="" name="dt_nasc_proprietario" id="dt_nasc_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira a data de Nascimento
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Identidade:</label>
                                                            <input disabled class="form-control" value="<?php echo $identidade_proprietario ?>" type="text" placeholder="" name="identidade_proprietario" id="identidade_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira a Identidade
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Orgão Expedidor:</label>
                                                            <input disabled class="form-control" value="<?php echo $oex_identidade_proprietario ?>" type="text" placeholder="" name="oex_identidade_proprietario" id="oex_identidade_proprietario" oninput="adicionarBarra()">
                                                            <div class="invalid-feedback">
                                                                Insira o Orgão Expedidor
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">CPF:</label>
                                                            <input disabled class="form-control" value="<?php echo $cpf_proprietario ?>" type="text" placeholder="" name="cpf_proprietario" id="cpf_proprietario" maxlength="14" oninput="formatarCPF(this)">
                                                            <div class="invalid-feedback">
                                                                Insira o CPF
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                function showOwnerDetails() {
                                                    document.getElementById('ownerDetails').style.display = 'block';
                                                }

                                                function hideOwnerDetails() {
                                                    document.getElementById('ownerDetails').style.display = 'none';
                                                }
                                            </script>

                                            <div class="row" style="margin-top: 20px;">
                                                <a href="home.php" class="btn btn-danger btn-lg btn-block">RETORNAR AOS DADOS</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function formatarTelefone(input) {
            var telefone = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

            if (telefone.length >= 2 && telefone.length <= 14) {
                input.value = '(' + telefone.substr(0, 2) + ')' + telefone.substr(2);
            } else if (telefone.length >= 14) {
                input.value = '(' + telefone.substr(0, 2) + ')' + telefone.substr(2, 4) + telefone.substr(6);
            }
        }

        function formatarCelular(input) {
            var celular = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

            if (celular.length >= 2 && celular.length <= 14) {
                input.value = '(' + celular.substr(0, 2) + ')' + celular.substr(2);
            } else if (celular.length >= 14) {
                input.value = '(' + celular.substr(0, 2) + ')' + celular.substr(2, 4) + celular.substr(6);
            }
        }
    </script>


    <script>
        function formatarCPF(input) {
            var cpfSemPontos = input.value.replace(/\D/g, '');

            if (cpfSemPontos.length > 9) {
                var cpfFormatado = cpfSemPontos.substr(0, 3) + '.' + cpfSemPontos.substr(3, 3) + '.' + cpfSemPontos.substr(6, 3) + '-' + cpfSemPontos.substr(9);
                input.value = cpfFormatado;
            } else {
                input.value = cpfSemPontos;
            }
        }
    </script>

    <script>
        function formatarCEP(input) {
            var cepSemHifen = input.value.replace(/\D/g, '');

            if (cepSemHifen.length > 5) {
                var cepFormatado = cepSemHifen.substr(0, 5) + '-' + cepSemHifen.substr(5);
                input.value = cepFormatado;
            } else {
                input.value = cepSemHifen;
            }
        }
    </script>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
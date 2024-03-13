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
                        <a style="color: white;" class="nav-link active" href="cadastrar_cliente.php">Cadastrar Clientes</a>
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
                                    <form id="form_avisos" class="needs-validation" novalidate method="POST" action="processa_cliente.php">
                                        <div class="row">

                                            <h2 for="Endereço">Dados Pessoais:</h2>
                                            <!-- Dados Pessoais -->
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Nome Do Cliente:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="nome_cliente" id="nome_cliente">
                                                    <div class="invalid-feedback">
                                                        Insira o Nome Do Cliente
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Nacionalidade:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="nacionalidade" id="nacionalidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Nacionalidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Naturalidade:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="naturalidade" id="naturalidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Naturalidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Data de Nascimento:</label>
                                                    <input required class="form-control" type="date" placeholder="" name="dt_nasc" id="dt_nasc">
                                                    <div class="invalid-feedback">
                                                        Insira a data de Nascimento
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Estado Civil:</label>
                                                    <select class="form-control" id="estado_civil" name="estado_civil">
                                                        <option value="solteiro">Solteiro</option>
                                                        <option value="casado">Casado</option>
                                                        <option value="separado">Separado</option>
                                                        <option value="divorciado">Divorciado</option>
                                                        <option value="viuvo">Viúvo</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Profissão:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="profissao" id="profissao">
                                                    <div class="invalid-feedback">
                                                        Insira a Profissão
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Identidade:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="identidade" id="identidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Identidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Orgão Expedidor:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="oex_identidade" id="oex_identidade" oninput="adicionarBarra()">
                                                    <div class="invalid-feedback">
                                                        Insira o Orgão Expedidor
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">CPF:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="cpf" id="cpf" maxlength="14" oninput="formatarCPF(this)">
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
                                                    <input required class="form-control" type="text" placeholder="" name="rua" id="rua">
                                                    <div class="invalid-feedback">
                                                        Insira a Rua
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Bairro:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="bairro" id="bairro">
                                                    <div class="invalid-feedback">
                                                        Insira o Bairro
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">CEP:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="cep" id="cep" maxlength="9" oninput="formatarCEP(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o CEP
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Número da Casa:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="num_casa" id="num_casa">
                                                    <div class="invalid-feedback">
                                                        Insira o Número da Casa
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Cidade:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="cidade" id="cidade">
                                                    <div class="invalid-feedback">
                                                        Insira a Cidade
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">UF:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="uf" id="uf">
                                                    <div class="invalid-feedback">
                                                        Insira o UF
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Celular de contato:</label>
                                                    <input required class="form-control" type="text" maxlength="14" placeholder="" name="cel_Contato" id="cel_Contato" oninput="formatarCelular(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o Celular de contato
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Telefone de contato:</label>
                                                    <input required class="form-control" type="text" maxlength="14" placeholder="" name="tel_Contato" id="tel_Contato" oninput="formatarTelefone(this)">
                                                    <div class="invalid-feedback">
                                                        Insira o Telefone de contato
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label for="tipo">Ponto de Referência:</label>
                                                    <input required class="form-control" type="text" placeholder="" name="pnt_refer" id="pnt_refer">
                                                    <div class="invalid-feedback">
                                                        Insira o Ponto de Referência
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="row">
                                                <!-- Imovel é do cliente? -->
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <label for="tipo">Este imóvel é do Cliente?:</label>
                                                        <label for="">Sim</label>
                                                        <input required type="radio" value="0" name="imovel_status" id="simImovel" onclick="hideOwnerDetails()">
                                                        <label for="">Não</label>
                                                        <input required type="radio" value="1" name="imovel_status" id="naoImovel" onclick="showOwnerDetails()">
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="ownerDetails" style="display: none;">
                                                <div class="row">

                                                    <h2 for="Endereço">Dados do Proprietario do imóvel:</h2>
                                                    <!-- Dados Pessoais do proprietario -->
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Nome Do proprietario:</label>
                                                            <input required class="form-control" type="text" placeholder="" name="nome_proprietario" id="nome_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira o Nome Do proprietario
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Nacionalidade:</label>
                                                            <input required class="form-control" type="text" placeholder="" name="nacionalidade_proprietario" id="nacionalidade_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira a Nacionalidade
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Data de Nascimento:</label>
                                                            <input required class="form-control" type="date" placeholder="" name="dt_nasc_proprietario" id="dt_nasc_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira a data de Nascimento
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Identidade:</label>
                                                            <input required class="form-control" type="text" placeholder="" name="identidade_proprietario" id="identidade_proprietario">
                                                            <div class="invalid-feedback">
                                                                Insira a Identidade
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">Orgão Expedidor:</label>
                                                            <input required class="form-control" type="text" placeholder="" name="oex_identidade_proprietario" id="oex_identidade_proprietario" oninput="adicionarBarra()">
                                                            <div class="invalid-feedback">
                                                                Insira o Orgão Expedidor
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <label for="tipo">CPF:</label>
                                                            <input required class="form-control" type="text" placeholder="" name="cpf_proprietario" id="cpf_proprietario" maxlength="14" oninput="formatarCPF(this)">
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

                                            <div class="row">
                                                <button id="btn_salvar" type="submit" class="btn btn-success btn-lg btn-block">Cadastrar Cliente</button>
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
        function adicionarBarra() {
            var inputElement = document.getElementById("oex_identidade");

            var valor = inputElement.value;

            valor = valor.replace(/\//g, '');

            if (valor.length > 6) {
                valor = valor.slice(0, 6);
            }

            if (valor.length >= 4) {
                var novoValor = valor.slice(0, -2) + '/' + valor.slice(-2);

                inputElement.value = novoValor;
            }
        }
        function adicionarBarra() {
            var inputElement = document.getElementById("oex_identidade_proprietario");

            var valor = inputElement.value;

            valor = valor.replace(/\//g, '');

            if (valor.length > 6) {
                valor = valor.slice(0, 6);
            }

            if (valor.length >= 4) {
                var novoValor = valor.slice(0, -2) + '/' + valor.slice(-2);

                inputElement.value = novoValor;
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
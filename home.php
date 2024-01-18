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
                        <a style="color: white" class="nav-link active" href="home.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar_cliente.php">Cadastrar Clientes</a>
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
                                    <table id="example1" class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NOME DO CLIENTE</th>
                                                <th>NATURALIDADE</th>
                                                <th>NACIONALIDADE</th>
                                                <th>DATA DE NASCIMENTO</th>
                                                <th>IDENTIDADE</th>
                                                <th>CPF</th>
                                                <th>TRATAR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('conexao.php');
                                            $select = "SELECT * FROM cliente";
                                            $result = mysqli_query($link, $select);
                                            foreach ($result as $linha) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $id = $linha['id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $nome_cliente = $linha['nome_cliente']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $naturalidade = $linha['naturalidade']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $nacionalidade = $linha['nacionalidade']; ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $data_nascimento = $linha['data_nascimento'];

                                                        $data_formatada = date('d/m/Y', strtotime($data_nascimento));

                                                        echo $data_formatada
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $identidade = $linha['identidade']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $cpf = $linha['cpf']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Tratar
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="visualizar_cliente.php?id=<?php echo $id; ?>">Ver Dados Completos</a>
                                                                <a class="dropdown-item" href="editar_dados.php?id=<?php echo $id; ?>">Editar Dados</a>
                                                                <a class="dropdown-item" target="_blank" href="pdfs/index.php?id=<?php echo $id ?>">Gerar Declaração de Endereço</a>
                                                                <a class="dropdown-item" target="_blank" href="pdfs/index2.php?id=<?php echo $id ?>">Gerar Declaração de Guarda de Acervo</a>
                                                                <a class="dropdown-item" target="_blank" href="pdfs/index3.php?id=<?php echo $id ?>">Gerar Declaração de Idoneidade</a>
                                                                <a class="dropdown-item" target="_blank" href="pdfs/index4.php?id=<?php echo $id ?>">Gerar Declaração de Segurança do Acervo (DSA 1)</a>
                                                                <a class="dropdown-item" target="_blank" href="pdfs/index5.php?id=<?php echo $id ?>">Gerar Declaração de Segurança do Acervo (DSA 2)</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
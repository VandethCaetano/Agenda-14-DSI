<?php
include_once '../Model/Usuario.php';
include_once '../Model/FormacaoAcad.php';
include_once '../Model/OutrasFormacoes.php';
include_once '../Model/ExperienciaProfissional.php';

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["idusuario_detalhar"])) {
    echo "<script>alert('Usuário não selecionado.');</script>";
    echo "<script>window.location.href = 'ADMListarCadastrados.php';</script>";
    exit;
}

$idusuario = $_SESSION["idusuario_detalhar"];

$usuario = new Usuario();
$usuario->carregarUsuarioPorID($idusuario);

// Listar formações
$formacao = new FormacaoAcad();
$listaFormacoes = $formacao->listaFormacoes($idusuario);

// Listar experiências
$experiencia = new ExperienciaProfissional();
$listaExperiencias = $experiencia->listaExperiencias($idusuario);

// Listar outras formações
$outra = new OutrasFormacoes();
$listaOutras = $outra->listaFormacoes($idusuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Usuário</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">

<div class="w3-container w3-padding">
    <header class="w3-container w3-center w3-cyan w3-round-large w3-padding">
        <h2>Detalhes do Usuário</h2>
    </header>

    <div class="w3-container w3-white w3-card w3-round-large w3-padding w3-margin-top">
        <p><strong>ID:</strong> <?= $usuario->getID() ?></p>
        <p><strong>Nome:</strong> <?= $usuario->getNome() ?></p>
        <p><strong>CPF:</strong> <?= $usuario->getCPF() ?></p>
        <p><strong>Email:</strong> <?= $usuario->getEmail() ?></p>
        <p><strong>Data de Nascimento:</strong> <?= $usuario->getDataNascimento() ?></p>
    </div>

    <!-- Formação Acadêmica -->
    <div class="w3-container w3-white w3-card w3-round-large w3-padding w3-margin-top">
        <h3 class="w3-text-blue">Formações Acadêmicas</h3>
        <table class="w3-table-all w3-small">
            <thead>
                <tr class="w3-blue">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($f = $listaFormacoes->fetch_object()) {
                    echo "<tr>
                            <td>{$f->inicio}</td>
                            <td>{$f->fim}</td>
                            <td>{$f->descricao}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Experiência Profissional -->
    <div class="w3-container w3-white w3-card w3-round-large w3-padding w3-margin-top">
        <h3 class="w3-text-blue">Experiência Profissional</h3>
        <table class="w3-table-all w3-small">
            <thead>
                <tr class="w3-blue">
                    <th>Empresa</th>
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($e = $listaExperiencias->fetch_object()) {
                    echo "<tr>
                            <td>{$e->empresa}</td>
                            <td>{$e->inicio}</td>
                            <td>{$e->fim}</td>
                            <td>{$e->descricao}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Outras Formações -->
    <div class="w3-container w3-white w3-card w3-round-large w3-padding w3-margin-top">
        <h3 class="w3-text-blue">Outras Formações</h3>
        <table class="w3-table-all w3-small">
            <thead>
                <tr class="w3-blue">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($o = $listaOutras->fetch_object()) {
                    echo "<tr>
                            <td>{$o->inicio}</td>
                            <td>{$o->fim}</td>
                            <td>{$o->descricao}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Botão Voltar -->
    <form method="post" action="../Controller/navegacao.php" class="w3-center w3-margin-top">
        <button name="btnVoltar" class="w3-button w3-blue w3-round-large">Voltar</button>
    </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Adicionar Administrador</title>
</head>

<body class="w3-light-grey">

    <div class="w3-container">

        <header class="w3-container w3-padding-32 w3-center">
            <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
                Cadastrar Novo Administrador
            </h1>
        </header>

        <!-- Formulário -->
        <form action="../Controller/navegacao.php" method="post"
            class="w3-container w3-light-grey w3-text-blue w3-center"
            style="width: 50%; margin: auto;">

            <input type="hidden" name="nome_form" value="frmCadastroADM" />

            <!-- Nome -->
            <div class="w3-row w3-section">
                <label>Nome:</label>
                <input class="w3-input w3-border w3-round-large" name="txtNomeADM" type="text" required>
            </div>

            <!-- CPF -->
            <div class="w3-row w3-section">
                <label>CPF:</label>
                <input class="w3-input w3-border w3-round-large" name="txtCPFADM" type="text" required>
            </div>

            <!-- Senha -->
            <div class="w3-row w3-section">
                <label>Senha:</label>
                <input class="w3-input w3-border w3-round-large" name="txtSenhaADM" type="password" required>
            </div>

            <!-- Botões -->
            <div class="w3-row w3-section w3-center">
                <button name="btnSalvarADM"
                    class="w3-button w3-blue w3-round-large w3-margin"
                    style="width: 20%;">
                    Salvar
                </button>


            </div>
        </form>

        <form action="../Controller/navegacao.php" method="post" style="text-align: center;">
            <button name="btnVoltar"
                class="w3-button w3-blue w3-round-large w3-margin"
                style="width: 10%;">
                Voltar
            </button>
        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Início - Sistema de Currículos</title>
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">

 <div class="w3-padding-64 w3-center">
        <header class="w3-container w3-padding-32 w3-center">
            <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">SISTEMA DE CURRÍCULOS</h1>
            <h3 class="w3-text-blue">Escolha uma opção para continuar:</h3>
        </header>

        <form action="Controller/Navegacao.php" method="post" class="w3-container w3-margin-top">
            <button name="btnAcessarUsuario"
        class="w3-button w3-blue w3-round-large w3-xlarge w3-margin w3-hover-cyan"
        style="width: 250px;">
    <i class="fa fa-user"></i> Usuário
</button>

            <button name="btnADM"
                    class="w3-button w3-green w3-round-large w3-xlarge w3-margin w3-hover-light-green"
                    style="width: 250px;">
                <i class="fa fa-lock"></i> Administrador
            </button>
        </form>
    </div>

</body>
</html>

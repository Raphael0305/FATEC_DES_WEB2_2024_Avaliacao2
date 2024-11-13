<?php
require_once __DIR__ . '/classes/login.php';
$validador = new Login();
$validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Vagas de Estágio</title>
</head>
<body>
    <center>
        <h2>Vagas de Estágio</h2>
    </center>
    
    <br>
    <div class="botoes">
        <a href="cadastro_vaga.php" class="cadastro">Cadastrar Vaga</a>
        <a href="remover_vaga.php"  class="remover" >Remover vaga</a>
        <a href="listar_vagas.php"  class="lista">Visualizar vagas</a>
        <a href="login.php"         class="sair">Logout</a>
    </div>
</body>
</html>
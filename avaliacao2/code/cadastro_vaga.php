<?php
require_once __DIR__ . '/classes/login.php';
$login = NEW Login;
$login->verificar_logado();

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vaga</title>
    <style>
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

        .botoes{
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        a{
            text-decoration: none;
            background-color: rgb(199, 199, 109);
            width: 150px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: black;
            font-size: 1.2rem;
        }
        .exclu{
            background-color: brown;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Cadastro de Vaga</h2>
    <form action="processa_vaga.php" method="post">
        <label for="nomeEmpresa">Nome da Empresa:</label>
        <input type="text" id="nomeEmpresa" name="nomeEmpresa" required>

        <label for="numeroWhatsapp">Número do WhatsApp:</label>
        <input type="text" id="numeroWhatsapp" name="numeroWhatsapp" required>

        <label for="emailContato">Email de Contato:</label>
        <input type="email" id="emailContato" name="emailContato" required>

        <label for="descritivoVaga">Descritivo da Vaga:</label>
        <textarea id="descritivoVaga" name="descritivoVaga" rows="4" required></textarea>

        <label for="curso">Curso:</label>
        <select id="curso" name="curso" required>
            <option value="1">DSM</option>
            <option value="2">GE</option>
        </select>
        <button type="submit">Cadastrar Vaga</button>
    </form>

    <div class="botoes">
        <a href="home.php">Voltar</a>
        <a href="remover_vaga.php" class="exclu">Excluir Vaga</a>
    </div>

</body>
</html>

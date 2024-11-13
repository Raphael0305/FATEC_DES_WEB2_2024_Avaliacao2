<?php
require_once __DIR__ . '/classes/login.php';
$login = NEW Login;
$login->verificar_logado();
require_once __DIR__ . '/classes/cadastro.php';
$cadastro = NEW Cadastro;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
            margin: 100px auto;
            width: 80%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h2{
            font-size: 3rem;
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
        .botoes{
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
    </style>
<body>

    <center>
    <h2>Vagas de Estágio</h2>
    </center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Empresa</th>
                <th>Número WhatsApp</th>
                <th>Email de Contato</th>
                <th>Descritivo da Vaga</th>
                <th>Curso</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    $dados = $cadastro->mostrarVagas();
                    foreach($dados as $vagas){                        
                ?>
                <tr>
                    <td><?php echo $vagas['id'];?></td>
                    <td><?php echo $vagas['nome_empresa'];?></td>
                    <td><?php echo $vagas['numero_whatsapp'];?></td>
                    <td><?php echo $vagas['email_contato'];?></td>
                    <td><?php echo $vagas['descritivo_vaga'];?></td>
                    <td><?php echo $vagas['curso'];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>   
    
    <div class="botoes">
        <a href="home.php">Voltar</a>
        <a href="remover_vaga.php" class="exclu">Excluir Vaga</a>
    </div>
</body>
</html>
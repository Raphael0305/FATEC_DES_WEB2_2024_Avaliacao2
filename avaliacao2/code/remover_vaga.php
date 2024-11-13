<?php
require_once __DIR__ . '/classes/login.php';
require_once __DIR__ . '/classes/cadastro.php';
$login = NEW Login;
$login->verificar_logado();
$cadastro = NEW Cadastro;
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Vaga</title>
    <style>
        form {
            max-width: 400px;
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
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff3333;
        }

        .botoes{
    margin-top: 10%;
    display: flex;
    flex-direction: column;
    gap: 30px;
    align-items: center;
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

.msgErro{
    background-color: #ff3333;
    text-align: center;
    margin: 10px auto;
    width: 300px;
    height: 20px;
    font-weight: 500;
    border-radius: 2px;
    color: white;
}

.msg{
    background-color: green;
    text-align: center;
    margin: 10px auto;
    width: 300px;
    height: 20px;
    font-weight: 500;
    border-radius: 2px;
    color: white;
}
    </style>
</head>
<body>

    <h2 style="text-align: center;">Remover Vaga</h2>
    <form method="post">
        <label for="vagaId">ID da Vaga:</label>
        <input type="number" id="vagaId" name="vagaId" required>
        <button type="submit">Remover Vaga</button>
        <?php
           if(isset($_POST['vagaId'])){

            $id = $_POST['vagaId'];
        
            if($cadastro->removerVaga($id)){
                ?>
                <div class="msg">
                    Removido com sucesso!!
                </div>
                <?php
            }else{
                ?>
                <div class="msgErro">
                    Esse código não esta cadastrado!
                </div>
                <?php
            }
        }

        ?>
    </form>

    <div class="botoes">
        <a href="cadastro_vaga.php" class="cadastro">Cadastrar Vaga</a>
        <a href="listar_vagas.php"  class="lista">Visualizar vagas</a>
        <a href="home.php"  class="lista">Voltar</a>
    </div>


</body>
</html>
<?php





?>
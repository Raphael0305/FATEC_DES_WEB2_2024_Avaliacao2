<?php
require_once __DIR__ . '/classes/cadastro.php';
$cadastro = NEW Cadastro;
var_dump($_POST);

if(isset($_POST['nomeEmpresa'])){
    $empresa    =   $_POST['nomeEmpresa'];
    $numero     =   $_POST['numeroWhatsapp'];
    $email      =   $_POST['emailContato'];
    $descritivo =   $_POST['descritivoVaga'];
    $curso      =   $_POST['curso'];

    $cadastro->cadastrarVaga($empresa,$numero,$email,$descritivo,$curso);
    header("Location: cadastro_vaga.php");
}







?>
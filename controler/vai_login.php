<?php
session_start();
require_once('db-Benito.class.php');
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";

$objDb = new db();
$link = $objDb->conecta_mysql();
$resultado_id  = mysqli_query($link, $sql);
if ($resultado_id) {
    $dados_usuario = mysqli_fetch_array($resultado_id);
    if (isset($dados_usuario['email'])) {
        $_SESSION['id'] = $dados_usuario['id'];
        $_SESSION['nome'] = $dados_usuario['nome'];
        $_SESSION['email'] = $dados_usuario['email'];
        $_SESSION['cargo'] = $dados_usuario['cargo'];
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php?erro=1');
    }
} else {
    echo "Erro na execução da consulta, favor entrar em contato com o admin do site.<br> Whatssap: 27 995152815";
}
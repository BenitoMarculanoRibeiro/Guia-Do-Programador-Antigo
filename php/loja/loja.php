<?php
session_start();
$id_amigo = isset($_GET['id']) ? $_GET['id'] : 0;
#if (!isset($_SESSION["email"])) {
#    header("Location: Chat.php?erro=1");
#}
require_once('Produto.class.php');
$produto = new Produto;
//$mensagem = new Mensagem;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia do Programador</title>
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div style="text-align: center; background-color: aqua;">
        <span style="font-size: 50px;">Guia do Programador</span>
    </div>
    <div id="cabecalho" class="cabecalho">
        <table>
            <tr class="home">
                <form action="../php/index.php" method="post">
                    <input class="coluna-20" type="submit" value="Inicio">
                </form>
            </tr>
            <tr class="sobre">
                <form action="../php/index.php" method="post">
                    <input class="coluna-20" type="submit" value="Sobre Nós">
                </form>
            </tr>
            <tr class="chalengers">
                <form action="../php/index.php" method="post">
                    <input class="coluna-20" type="submit" value="Desafios">
                </form>
            </tr>
            <tr class="myContrib">
                <form action="../php/index.php" method="post">
                    <input class="coluna-20" type="submit" value="MyContrib">
                </form>
            </tr>
            <tr class="store">
                <form action="loja.php" method="post">
                    <input class="coluna-20" type="submit" value="Loja">
                </form>
            </tr>
        </table>
    </div>
    <div id="loja">

        <table>
            <td>
                <table id="setProdutos" style="margin: 0 auto; width: 50%; background-color: #F63C3C;" class="displayed">
                    <tr style="background-color: #F6773C;">
                        <td><span>Imagem</span></td>
                        <td><span>Produto</span></td>
                        <td><span>Descrição</span></td>
                        <td><span>Valor</span></td>
                        <td><span>Quantidade</span></td>
                    </tr>
                    <input></input>
                    <?php $produto->criarTabela(); ?>
                </table>
            </td>
            <hr width="2" size="100" style="background-color: red;">
            <td>
                <table id="carrinho" style="margin: 0 auto; width: 50%; background-color: #F63C3C;" class="displayed">

                </table>
            </td>
        </table>
    </div>
</body>

</html>
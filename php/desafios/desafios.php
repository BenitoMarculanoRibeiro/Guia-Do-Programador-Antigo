<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia do Programador</title>
    <link type="text/css" rel="stylesheet" href="style-index.css">
</head>

<body>
    <section class="cabecalho">
        <div class="logo">
            <img src="../../img/pao.jpg" width="100px" height="50px">
            <h1>Guia do Programador</h1>
        </div>
        <div>
            <nav class="menu">
                <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="/">Cursos</a></li>
                    <li><a href="/">Loja</a></li>
                    <li><a href="/">Doação</a></li>
                    <li><a href="/">Desafios</a></li>
                    <li><a href="/">Membros</a></li>
                    <li><a>Login</a>
                        <ul>
                            <li><a href="/">Entrar</a></li>
                            <li><a href="">Criar Conta</a></li>
                        </ul>
                    </li>
                    <li><a href="/"><?php echo ($_SESSION['nome']); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>
    <div class="center">
        <div class="desafios" style="background-color: rebeccapurple;">
            <a style="float: right; margin-right: 10px;" href="criar-desafios/criar-desafios.php">+Desafio</a>
            <div class="linguagem"><span>Java</span></div>
            <div class="desafio"><span>Java</span></div>
            <div class="linguagem"><span>Python</span></div>
            <div class="linguagem"><span>JS</span></div>
            <div class="linguagem"><span>Web</span></div>
        </div>
        <div id="desafio-cacheiro-viagente" style="background-color: red;">
            oi
        </div>
    </div>
    <footer>
        <p>Desenvolvido por <a href="https://github.com/lucasgsz" target="_blank">Lucasgsz </a></p>
        <p>&nbsp;e <a href="https://github.com/BenitoMarculanoRibeiro" target="_blank">BenitoMarculanoRibeiro</a></p>
        <a href="/" target="_blank">Instagram</a>
        <a href="https://www.youtube.com/channel/UCqwHqhXmFBAqDwIBlOUcVVw/featured" target="_blank">Youtube</a>
    </footer>
</body>

</html>
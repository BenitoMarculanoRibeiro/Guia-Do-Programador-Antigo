<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia do Programador</title>
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
    <style>
        .init {
            display: block;
            border-radius: 0.30em;
            color: white;
            text-decoration: none;
            border: none;
            text-align: center;
            cursor: pointer;
            font-weight: 300px;
            font-family: 'Raleway';
            padding: 13px;
            background: none;
            border: solid 2px white;
            box-sizing: border-box;
            transition: all 0.2s;
            font-size: 15px;
        }

        .init:hover {
            color: #111111;
            background-color: white;
        }
    </style>
</head>

<body>
    <div style="display: grid; grid-template-columns: auto auto auto auto auto 10%;">
        <a class="init" href="/">Inicio</a>
        <a class="init" href="../loja/loja.php">Sobre Nós</a>
        <a class="init" href="desafios/desafios.php">Desafios</a>
        <a class="init" href="../loja/loja.php">MyContrib</a>
        <a class="init" href="loja/loja.php">Loja</a>
        <a class="init" href="usuario/perfil.php"><?php echo ("Usuario " . $_SESSION['nome']);?></a>
    </div>
    <?php
    echo ("Usuario " . $_SESSION['nome']);
    ?>
    <div class="lixo">
        <h5 style="font-size: 50px;">
            Nessa terceira e última parte do nosso objetivo só precisamos centralizar a div interna, mas dessa vez não em relação a página mas em relação a div vermelha que é o elemento pai da div interna. Para isso podemos utilizar as mesmas propriedades que utilizamos
            para centralizar a segunda div. Por tanto, precisamos voltar ao arquivo position.css e no seletor .elementExample-internal adicionar as 4 propriedades que utilizamos pra centralizar a nossa segunda div:
        </h5>
        <h5 style="font-size: 50px;">
            Nessa terceira e última parte do nosso objetivo só precisamos centralizar a div interna, mas dessa vez não em relação a página mas em relação a div vermelha que é o elemento pai da div interna. Para isso podemos utilizar as mesmas propriedades que utilizamos
            para centralizar a segunda div. Por tanto, precisamos voltar ao arquivo position.css e no seletor .elementExample-internal adicionar as 4 propriedades que utilizamos pra centralizar a nossa segunda div:
        </h5>
        <h5 style="font-size: 50px;">
            Nessa terceira e última parte do nosso objetivo só precisamos centralizar a div interna, mas dessa vez não em relação a página mas em relação a div vermelha que é o elemento pai da div interna. Para isso podemos utilizar as mesmas propriedades que utilizamos
            para centralizar a segunda div. Por tanto, precisamos voltar ao arquivo position.css e no seletor .elementExample-internal adicionar as 4 propriedades que utilizamos pra centralizar a nossa segunda div:
        </h5>
        <h5 style="font-size: 50px;">
            Nessa terceira e última parte do nosso objetivo só precisamos centralizar a div interna, mas dessa vez não em relação a página mas em relação a div vermelha que é o elemento pai da div interna. Para isso podemos utilizar as mesmas propriedades que utilizamos
            para centralizar a segunda div. Por tanto, precisamos voltar ao arquivo position.css e no seletor .elementExample-internal adicionar as 4 propriedades que utilizamos pra centralizar a nossa segunda div:
        </h5>
        <h5 style="font-size: 50px;">
            Nessa terceira e última parte do nosso objetivo só precisamos centralizar a div interna, mas dessa vez não em relação a página mas em relação a div vermelha que é o elemento pai da div interna. Para isso podemos utilizar as mesmas propriedades que utilizamos
            para centralizar a segunda div. Por tanto, precisamos voltar ao arquivo position.css e no seletor .elementExample-internal adicionar as 4 propriedades que utilizamos pra centralizar a nossa segunda div:
        </h5>
    </div>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION["id"]) || !isset($_SESSION["nome"])) {
    // Usuário não logado! Redireciona para a página de login
    header("Location: php/usuario/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia do Programador</title>
    <link type="text/css" rel="stylesheet" href="css/style-index.css">
</head>

<body>
    <section class="cabecalho">
        <div class="logo">
            <img src="img/pao.jpg" width="100px" height="50px">
            <h1>Guia do Programador</h1>
        </div>
        <div>
            <nav class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Cursos</a></li>
                    <li><a href="php/loja/loja.php">Loja</a></li>
                    <li><a href="/">Doação</a></li>
                    <li><a href="php/desafios/desafios.php">Desafios</a></li>
                    <li><a href="/">Membros</a></li>
                    <li><a>Login</a>
                        <ul>
                            <li><a href="php/usuario/login.php">Entrar</a></li>
                            <li><a href="php/usuario/cadastro.php">Criar Conta</a></li>
                        </ul>
                    </li>
                    <li><a href="usuario/perfil.php"><?php echo ($_SESSION['nome']); ?></a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="noticiarelevante">
        <h1 class="titulorelevante">Notícias em Destaque</h1>
        <div class="divsnoticia">
            <div class="fotoprincipal fotosde fotosde1">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="fotosde">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="fotosde">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="fotosde">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="fotosde">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
        </div>
    </section>
    <section class="noticiasrecentes">
        <h1>Noticias Recentes</h1>
        <div class="noticiasdivs">
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <div class="noticiarec">
                <img src="img/aviao.jpg">
                <p>Cachorro Lindo avistando ser o super-man</p>
            </div>
            <button class="vermais">Ver Mais</button>
        </div>
    </section>
    <section class="container3">
        <div class="linguagens">
            <div class="Item">
                <p>FrontEnd</p>
            </div>
            <div class="Item">
                <p>BackEnd</p>
            </div>
            <div class="item">
                <p>FullStack</p>
            </div>
            <div class="Item">
                <p>Explore Mais</p>
            </div>
        </div>
        <div class="atividades">
            <div class="item">
                <p>Atividades e Desafios</p>
            </div>
            <div class="item">
                <p>Video Aulas</p>
            </div>
            <div class="item">
                <p>Cursos</p>
            </div>
            <div class="item">
                <p>Pratique com OpenSource</p>
            </div>
        </div>
    </section>
    <footer>
        <p>Desenvolvido por <a href="https://github.com/lucasgsz" target="_blank">Lucasgsz </a></p>
        <p>&nbsp;e <a href="https://github.com/BenitoMarculanoRibeiro" target="_blank">BenitoMarculanoRibeiro</a></p>
        <a href="/" target="_blank">Instagram</a>
        <a href="/" target="_blank">Youtube</a>
    </footer>

    <!--<div id="cabecalho" class="cabecalho">
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
                <form action="../php/loja/loja.php" method="post">
                    <input class="coluna-20" type="submit" value="Loja">
                </form>
            </tr>
        </table>
    </div>
    <div>
        
        <a href="https://pag.ae/7WGibpkpp/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a>
        
    </div>
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
    </div> -->
</body>

</html>
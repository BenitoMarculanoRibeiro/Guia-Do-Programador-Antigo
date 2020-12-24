<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Guia Do Programador</title>
    <link rel="sortcut icon" href="fotos_perfil/sad.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/style-login.css">
</head>

<body>
    <div class="arealogin">
        <fieldset class="fieldset">
            <p class="login">Login</p>
            <form method="POST" action="vai_login.php">
                <input id="email" name="email" type="email" class="form-control" placeholder="E-mail:">
                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha:">
                <?php
                if ($erro == 1) {
                    echo '<font color="#FF0000">Email ou Senha incorreto!</font>';
                }
                ?>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </form>
            <a href="cadastro.php" class="text-center">Ainda não tem uma conta?</a>
        </fieldset>
    </div>
</body>

</html>
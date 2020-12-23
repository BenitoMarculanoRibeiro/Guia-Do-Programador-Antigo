<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Area de Registro</title>
    <link rel="sortcut icon" href="fotos_perfil/sad.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/style-cadastro.css">
</head>

<body>
    <div class="areacadastro">
        <fieldset class="fieldset">
            <p class="registre">Registre-se</p>
            <form method="POST" action="controler/registra_usuario.php" action="../CHATeado">
                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome:" pattern="[A-Za-z]+{4,255}/?[\wà-úÀ-Ú ]*">
                <input id="email" name="email" type="email" class="form-control" placeholder="E-mail:">
                <?php
                if ($erro == 1) {
                    echo '<font color = "#FF0000" >O email informado já está vinculado à um usuario!</font>';
                }
                ?>
                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha:" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,254}">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
            </form>
            <a href="index.php" class="text-center">Ja tem uma conta?</a>
    </div>
</body>

</html>
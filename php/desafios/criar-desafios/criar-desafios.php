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
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/editor.css">
</head>

<body>
    <section class="cabecalho">
        <div class="logo">
            <img src="../../../img/pao.jpg" width="100px" height="50px">
            <h1>Guia do Programador</h1>
        </div>
        <div>
            <nav class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
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
        <div class="divisor">
            <input type="file" id="upload" hidden>
            <div id="painelEditor">
                <button class="btnColor" onclick="applyCommand('justifyLeft')"><i class="demo-icon icon-align-left"></i></button>
                <button class="btnColor" onclick="applyCommand('justifyCenter')"><i class="demo-icon icon-align-center"></i></button>
                <button class="btnColor" onclick="applyCommand('justifyRight')"><i class="demo-icon icon-align-right"></i></button>
                <button class="btnColor" onclick="applyCommand('justifyFull')"><i class="demo-icon icon-align-justify"></i></button>

                <button class="btnColor" onclick="applyCommand('bold')"><i class="demo-icon icon-bold"></i></button>
                <button class="btnColor" onclick="applyCommand('italic')"><i class="demo-icon icon-italic"></i></button>
                <button class="btnColor" onclick="applyCommand('strikeThrough')"><i class="demo-icon icon-strike"></i></button>
                <button class="btnColor" onclick="applyCommand('underline')"><i class="demo-icon icon-underline"></i></button>

                <button class="btnColor" onclick="applyCommand('outdent')"><i class="demo-icon icon-indent-left"></i></button>
                <button class="btnColor" onclick="applyCommand('indent')"><i class="demo-icon icon-indent-right"></i></button>

                <button class="btnColor" onclick="link()"><i class="demo-icon icon-link"></i></button>
                <button class="btnColor" onclick="applyCommand('redo')"><i class="demo-icon icon-ccw"></i></button>
                <button class="btnColor" onclick="applyCommand('undo')"><i class="demo-icon icon-cw"></i></button>
                <label for="upload"><i class="demo-icon icon-picture"></i></label>

                <i class="demo-icon icon-table"></i>

                <button id="fontColor" class="btnColor">F</button>
                <button id="backColor" class="btnColor">B</button>
                <button id="paleta" class="jscolor {valueElement:null, value:'3c8dbc'}"></button>

                <select type="text" id="inputFontSize" onchange="alterFont(this.value)">
                    <option value="2">10 pt</option>
                    <option value="3">12 pt</option>
                    <option value="4">14 pt</option>
                    <option value="6">16 pt</option>
                    <option value="7">18 pt</option>
                </select>
                <button onclick="document.getElementById('desafio').innerHTML=document.getElementById('editor').innerHTML;">Atualizar</button>
            </div>

            <div id="editor" contenteditable="true">
            </div>
        </div>
        <div>
        </div>
        <div class="divisor">
            <div id="painelEditor">
            </div>
            <div id="desafio">

            </div>
        </div>
    </div>
    <footer>
        <p>Desenvolvido por <a href="https://github.com/lucasgsz" target="_blank">Lucasgsz </a></p>
        <p>&nbsp;e <a href="https://github.com/BenitoMarculanoRibeiro" target="_blank">BenitoMarculanoRibeiro</a></p>
        <a href="/" target="_blank">Instagram</a>
        <a href="/" target="_blank">Youtube</a>
    </footer>
    <script src="js/jscolor.min.js"></script>
    <script src="js/editor.js"></script>
</body>

</html>
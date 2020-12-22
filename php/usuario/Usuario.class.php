<?php
$erro = isset($_GET['id']) ? $_GET['id'] : 0;
if (!class_exists('db')) {
    require('../../db.class.php');
}

class Usuario
{
    public $idusuario;
    public $nome;
    public $email;
    public $senha;
    public $cargo;

    function __construct()
    {
    }

    function criar($n, $e, $s)
    {
        $this->nome = $n;
        $this->email = $e;
        $this->senha = $s;
    }

    function criaComcargo($n, $e, $s, $c)
    {
        $this->nome = $n;
        $this->email = $e;
        $this->senha = $s;
        $this->cargo = $c;
    }

    function salvar()
    {
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `cargo`) VALUES (NULL, '$this->nome', '$this->email', '$this->senha', '0');";
        if (mysqli_query($link, $sql)) {
            header('Location: ../index.php');
        } else {
            echo "Erro ao registrar o usuário!";
        }
    }

    function retornaId($email)
    {
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql = "SELECT * FROM `usuario` WHERE `email` LIKE '$email'";
        $resultado_id  = mysqli_query($link, $sql);
        $row_id_usuario = $resultado_id->fetch_array(MYSQLI_ASSOC);
        //echo $row_id_usuario['id_usuario'];
        if ($row_id_usuario['id_usuario'] === NULL) {
            return true;
        } else {
            return false;
        }
    }

    function retornacargo($id)
    {
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql = "SELECT * FROM `usuario` WHERE `id_usuario` LIKE '$id'";
        $resultado  = mysqli_query($link, $sql);
        $row_id_usuario = $resultado->fetch_array(MYSQLI_ASSOC);
        $cargo = $row_id_usuario['cargo'];
        return $cargo;
    }

    function updateCargo($id, $cargo)
    {
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql = "UPDATE `usuario` SET `cargo` = '$cargo' WHERE `usuario`.`id` = $id;";
        mysqli_query($link, $sql);
    }

    function updateNome($id, $nome)
    {
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql = "UPDATE `usuario` SET `nome` = '$nome' WHERE `usuario`.`id_usuario` = '$id'";
        mysqli_query($link, $sql);
    }

    function retornaNome($id)
    {
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql = "SELECT * FROM `usuario` WHERE `id_usuario` LIKE '$id'";
        $resultado  = mysqli_query($link, $sql);
        $row_id_usuario = $resultado->fetch_array(MYSQLI_ASSOC);
        $nome = $row_id_usuario['nome'];
        return $nome;
    }

    function criarTabela($id)
    {
        $sql = "SELECT DISTINCT `id_conversa` from conversa WHERE (`id_usuario1` = " . $_SESSION['id_usuario'] . " OR `id_usuario2` = " . $_SESSION['id_usuario'] . ")";
        $this->db = new db;
        $resultado = $this->db->mysqli->query($sql);
        while ($row_conversa = $resultado->fetch_array(MYSQLI_ASSOC)) {
            $sql = "SELECT `id_usuario1`,`id_usuario2` FROM `conversa` WHERE `id_conversa` = " . utf8_encode($row_conversa['id_conversa']) . "";
            $resultado_id_usuario = $this->db->mysqli->query($sql);
            $row_id_usuario = $resultado_id_usuario->fetch_array(MYSQLI_ASSOC);
            if ($row_id_usuario['id_usuario1'] == $_SESSION['id_usuario']) {
                $sql = "SELECT * FROM `usuario` WHERE `id_usuario` =" . utf8_encode($row_id_usuario['id_usuario2']) . "";
                $resultado_usuario = $this->db->mysqli->query($sql);
                $row_usuario = $resultado_usuario->fetch_array(MYSQLI_ASSOC);
                echo '
                    <li class="nav-item  ">
                        <a href="Chat1.php?id=' . utf8_encode($row_usuario['id_usuario']) . '" class="nav-link ">
                            <table border="0">
                                <tr>
                                    <td><img id="cargo_" name="cargo_" src="cargos_/' . utf8_encode($row_usuario['cargo_']) . '" value="cargos_/' . utf8_encode($row_usuario['cargo_']) . '" class="align-content-center img-circle" style="Width: 30px!important; Height: 30px!important; margin-top: 2px;"></td>
                                    <td><span id="nome" name="nome" value="' . utf8_encode($row_usuario['nome']) . '" class="' . utf8_encode($row_usuario['nome']) . '" brand-text font-weight-light">' . utf8_encode($row_usuario['nome']) . '</span></td>
                                    <td><input type="hidden" id="id_usuario" name="id_usuario" value="' . utf8_encode($row_usuario['id_usuario']) . '"></td>
                                </tr>
                            </table> 
                        </a>
                    </li>';
            } else {
                $sql = "SELECT * FROM `usuario` WHERE `id_usuario` =" . utf8_encode($row_id_usuario['id_usuario1']) . "";
                $resultado_usuario = $this->db->mysqli->query($sql);
                $row_usuario = $resultado_usuario->fetch_array(MYSQLI_ASSOC);
                echo '
                <li class="nav-item  ">
                    <a href="Chat1.php?id=' . utf8_encode($row_usuario['id_usuario']) . '" class="nav-link ">
                        <table border="0">
                            <tr>
                                <td><img id="cargo_" name="cargo_" src="cargos_/' . utf8_encode($row_usuario['cargo_']) . '" value="cargos_/' . utf8_encode($row_usuario['cargo_']) . '" class="align-content-center img-circle" style="Width: 30px!important; Height: 30px!important; margin-top: 2px;"></td>
                                <td><span id="nome" name="nome" value="' . utf8_encode($row_usuario['nome']) . '" class="' . utf8_encode($row_usuario['nome']) . '" brand-text font-weight-light">' . utf8_encode($row_usuario['nome']) . '</span></td>
                                <td><input type="hidden" id="id_usuario" name="id_usuario" value="' . utf8_encode($row_usuario['id_usuario']) . '"></td>
                            </tr>
                        </table> 
                    </a>
                </li>';
            }
        }
    }

    function criarTabelaGrupo($id)
    {
    }
}

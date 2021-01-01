<?php
$erro = isset($_GET['id']) ? $_GET['id'] : 0;
try {
    if (!class_exists('db')) {
        require('../../controler/db.class.php');
    }
} catch (\Throwable $th) {
    try {
        if (!class_exists('db')) {
            require('../../controler/db-Benito.class.php');
        }
    } catch (\Throwable $th) {
        echo ('Erro ao conectar aos bancos de dados.');
    }
}
class Produto
{
    public $idproduto;
    public $nome;
    public $foto;
    public $descricao;
    public $valor;

    function __construct()
    {
    }

    function criar($n, $f, $d, $v)
    {
        $this->nome = $n;
        $this->foto = $f;
        $this->descricao = $d;
        $this->valor = $v;
    }

    function salvar()
    {
        $objDb = new db();
        $con = $objDb->conecta_mysql();
        $sql = "INSERT INTO `produtos` (`id`, `nome`, `foto`, `descricao`, `valor`) VALUES (NULL, '$this->nome', '$this->foto', '$this->descricao', '$this->valor');";
        if (mysqli_query($con, $sql)) {
            header('Location: ../../index.php');
        } else {
            echo "Erro ao registrar o usuário!";
        }
    }

    function retornaFoto($id)
    {
        $objDb = new db();
        $con = $objDb->conecta_mysql();
        $sql = "SELECT * FROM `produtos` WHERE `id` LIKE '$id'";
        $resultado  = mysqli_query($con, $sql);
        $row_id = $resultado->fetch_array(MYSQLI_ASSOC);
        $foto = $row_id['foto'];
        return $foto;
    }

    function updateNome($id, $nome)
    {
        $objDb = new db();
        $con = $objDb->conecta_mysql();
        $sql = "UPDATE `produtos` SET `nome` = '$nome' WHERE `produtos`.`id` = '$id'";
        mysqli_query($con, $sql);
    }

    function retornaNome($id)
    {
        $objDb = new db();
        $con = $objDb->conecta_mysql();
        $sql = "SELECT * FROM `produtos` WHERE `id` LIKE '$id'";
        $resultado  = mysqli_query($con, $sql);
        $row_id = $resultado->fetch_array(MYSQLI_ASSOC);
        $nome = $row_id['nome'];
        return $nome;
    }

    function criarTabela()
    {
        $objDb = new db();
        $con = $objDb->conecta_mysql();
        $sql = mysqli_query($con, "SELECT * FROM `produtos`");
        if ($sql === FALSE) {
            die(mysqli_error($sql));
        }
        while ($linha = mysqli_fetch_assoc($sql)) {
            echo ($linha['id']);
            echo '
                <tr>
                    
                        <td><img id="foto" name="foto" src="' . $linha['foto'] . '" value="' . $linha['foto'] . '" class="" style="Width: 100px!important; Height: 100px!important; margin-top: 2px;"></td>
                        <td><span id="nome" name="nome" value="' . $linha['nome'] . '" class="' . $linha['nome'] . '" brand-text font-weight-light">' . $linha['nome'] . '</span></td>
                        <td><span id="descricao" descricao="nome" value="' . $linha['descricao'] . '" class="' . $linha['descricao'] . '" brand-text font-weight-light">' . $linha['descricao'] . '</span></td>
                        <td><span id="valor" name="valor" value="' . $linha['valor'] . '" class="' . $linha['valor'] . '" brand-text font-weight-light">R$ ' . $linha['valor'] . '</span></td>
                        <td><form action="../../controler/adicionarCarrinho.php" method="post"><input type=text name=id value="' . $linha['id'] . '" type="hidden"><input type="submit" value="Adicionar ao Carrinho"></form></td>
                </tr>';
        }
        mysqli_close($con);
        mysqli_free_result($sql);
    }

    function criarCarrinho($listP, $listQ)
    {
        $objDb = new db();
        $con = $objDb->conecta_mysql();
        $sql = mysqli_query($con, "SELECT * FROM `produtos`");
        if ($sql === FALSE) {
            die(mysqli_error($sql));
        }
        while ($linha = mysqli_fetch_assoc($sql)) {
            echo '
                    <tr>
                        <td><img id="foto" name="foto" src="' . $linha['foto'] . '" value="' . $linha['foto'] . '" class="" style="Width: 100px!important; Height: 100px!important; margin-top: 2px;"></td>
                        <td><span id="nome" name="nome" value="' . $linha['nome'] . '" class="' . $linha['nome'] . '" brand-text font-weight-light">' . $linha['nome'] . '</span></td>
                        <td><span id="descricao" descricao="nome" value="' . $linha['descricao'] . '" class="' . $linha['descricao'] . '" brand-text font-weight-light">' . $linha['descricao'] . '</span></td>
                        <td><span id="valor" name="valor" value="' . $linha['valor'] . '" class="' . $linha['valor'] . '" brand-text font-weight-light">R$ ' . $linha['valor'] . '</span></td>
                        <td><span id="qtd" class="qtd">Quantidade</span><br><input id="qtd" name="qtd" value="1"></td>
                    </tr>';
        }
        mysqli_close($con);
        mysqli_free_result($sql);
    }
}
/*
for ($i = 0; $i < $total; $i++) {
    $linha = mysqli_fetch_assoc($resultado);
    echo ($linha['id']);
    $sql = "SELECT * FROM `produtos` WHERE `id` =" . utf8_encode($linha['id']) . "";
    $resultado_produto = mysqli_query($con, $sql);
    $row_produto = $resultado_produto->fetch_array(MYSQLI_ASSOC);
    echo '
                    <tr>
                        <td><img id="foto" name="foto" src="' . $row_produto['foto'] . '" value="' . $row_produto['foto'] . '" class="" style="Width: 100px!important; Height: 100px!important; margin-top: 2px;"></td>
                        <td><span id="nome" name="nome" value="' . $row_produto['nome'] . '" class="' . $row_produto['nome'] . '" brand-text font-weight-light">' . $row_produto['nome'] . '</span></td>
                        <td><span id="descricao" descricao="nome" value="' . $row_produto['descricao'] . '" class="' . $row_produto['descricao'] . '" brand-text font-weight-light">' . $row_produto['descricao'] . '</span></td>
                        <td><span id="valor" name="valor" value="' . $row_produto['valor'] . '" class="' . $row_produto['valor'] . '" brand-text font-weight-light">R$ ' . $row_produto['valor'] . '</span></td>
                        <td><span id="qtd" class="qtd">Quantidade</span><br><input id="qtd" name="qtd" value="1"></td>
                    </tr>';
}
*/
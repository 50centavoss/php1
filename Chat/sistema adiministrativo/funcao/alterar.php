<?php
    include '../conexao.php';

    if(isset($_REQUEST['id'])){


        $id = $_REQUEST['id'];
        $descricao = $_REQUEST['descricao'];
        $obs = $_REQUEST['obs'];

        $sql = "UPDATE usuario SET descricao='$descricao', codigo='$codigo' WHERE id='$id' ";

        $resultado = mysqli_query($conexao, $sql);

        header('Location: ../funcao.php');
    }else{
        header('Location: ../funcao.php');
    }

?>  
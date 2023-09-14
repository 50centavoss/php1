<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Postagens</title>
</head>
<body>
    <div class="painel"> 
     <div class="cabecalho">
        <h1> Definição de Cookie </h1>
        <a href="index.html" class="botao"> Fazer Nova Postagem</a>
     </div>

     <div class="conteudo"> 
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["usuario"];  

            setcookie("nome", $nome, time() +86499 * 30, "/");

            echo "Cookie de nome de usuario defenido com sucesso. <br>";
            echo "Nome Usuário: $nome";

        }else{
            echo "Erro: Requisição Inválida";
        }
        ?>


     </div>
     <div class="rodape">   </div>
    </div>

    
</body>
</html>
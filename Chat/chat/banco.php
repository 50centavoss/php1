<?php 
      $nomeServidor = "localhost";
      $username = "root";
      $senha = "";
      $nomeBanco = "rede_banco";


      $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

      if($conexao -> connect_error){
        die("Conexão com o banco de dados falhou!". $conexao -> connect_error);
      }
?>
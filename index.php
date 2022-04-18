<?php
  include "services/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Inscrição</title>
</head>
<body>
  <h2>Formulário para Inscrição de Competidores</h2>

  <form action="script.php" method="post">
    <?php
      $mensagemDeErro = obterMensagemErro();
      if(!empty($mensagemDeErro)) {
        echo "<p>$mensagemDeErro</p>";
      }
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="number" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do Competidor"/></p>
    <?php
      $mensagemDeSucesso = obterMensagemSucesso();
      if(!empty($mensagemDeSucesso)) {
        echo "<p>$mensagemDeSucesso</p>";
      }
    ?>
  </form>
</body>
</html>
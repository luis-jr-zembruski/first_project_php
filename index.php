<?php
  session_start();
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
      $mensagemDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";
      if(!empty($mensagemDeErro)) {
        echo "<p>$mensagemDeErro</p>";
        unset($_SESSION["mensagem-de-erro"]);
      }
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="number" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do Competidor"/></p>
    <?php
      $mensagemDeSucesso = isset($_SESSION["mensagem-de-sucesso"]) ? $_SESSION["mensagem-de-sucesso"] : "";
      if(!empty($mensagemDeSucesso)) {
        echo "<p>$mensagemDeSucesso</p>";
        unset($_SESSION["mensagem-de-sucesso"]);
      }
    ?>
  </form>
</body>
</html>
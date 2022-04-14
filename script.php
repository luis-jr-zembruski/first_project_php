<?php

session_start();

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome)) {
  $_SESSION["mensagem-de-erro"] =  "O nome não pode ser vazio. Informe um nome.";
  header("Location: index.php");
  return;
}elseif(strlen($nome) < 3) {
  $_SESSION["mensagem-de-erro"] =  "O nome não pode conter menos de 3 caracteres.";
  header("Location: index.php");
  return;
}elseif(strlen($nome) > 40) {
  $_SESSION["mensagem-de-erro"] =  "O nome é muito extenso.";
  header("Location: index.php");
  return;
}elseif(empty($idade)) {
  $_SESSION["mensagem-de-erro"] =  "A idade não pode ser vazia.";
  header("Location: index.php");
  return;
}elseif(!is_numeric($idade)) {
  $_SESSION["mensagem-de-erro"] =  "Idade não válida.";
  header("Location: index.php");
  return;
}else{
 if($idade >= 6 && $idade <= 12){
    $_SESSION["mensagem-de-sucesso"] =  "O atleta $nome compete na categoria $categorias[0]";
    header("Location: index.php");
    return;
  } elseif($idade >= 13 && $idade <= 18){
    $_SESSION["mensagem-de-sucesso"] =  "O atleta $nome compete na categoria $categorias[1]";
    header("Location: index.php");
    return;
  } elseif($idade >= 19){
    $_SESSION["mensagem-de-sucesso"] =  "O atleta $nome compete na categoria $categorias[2]";
    header("Location: index.php");
    return;
  } else {
    $_SESSION["mensagem-de-sucesso"] =  "O atleta não compete!";
    header("Location: index.php");
    return;
  }
}


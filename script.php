<?php

session_start();

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];


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



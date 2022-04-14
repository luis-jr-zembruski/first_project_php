<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if($idade >= 6 && $idade <= 12){
  echo "O atleta $nome compete na categoria $categorias[0]";
} elseif($idade >= 13 && $idade <= 18){
  echo "O atleta $nome compete na categoria $categorias[1]";
} elseif($idade >= 19 && $idade <= 59){
  echo "O atleta $nome compete na categoria $categorias[2]";
} else {
  echo "O atleta $nome não compete";
}
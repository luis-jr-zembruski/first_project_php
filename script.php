<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome)) {
  echo "O nome não pode ser vazio";
}elseif(strlen($nome) < 3) {
  echo "O nome deve ter pelo menos 3 caracteres";
}elseif(strlen($nome) > 40) {
  echo "O nome é muito extenso";
}elseif(empty($idade)) {
  echo "A idade não pode ser vazia";
}elseif(!is_numeric($idade)) {
  echo "A idade deve ser um número";
}else{
 if($idade >= 6 && $idade <= 12){
    echo "O atleta $nome compete na categoria $categorias[0]";
  } elseif($idade >= 13 && $idade <= 18){
    echo "O atleta $nome compete na categoria $categorias[1]";
  } elseif($idade >= 19 && $idade <= 59){
    echo "O atleta $nome compete na categoria $categorias[2]";
  } else {
    echo "O atleta $nome não compete";
  }
}


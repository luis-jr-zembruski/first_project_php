<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';

$nome = 'Eduardo';
$idade = 18;

if($idade >= 6 && $idade <= 12){
  echo "Categoria: $categorias[0]";
}elseif($idade > 12 && $idade <= 18){
  echo "Categoria: $categorias[1]";
}else{
  echo "Categoria: $categorias[2]";
}
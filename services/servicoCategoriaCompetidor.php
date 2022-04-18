<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string {

  $categorias = [];
  $categorias[] = "infantil";
  $categorias[] = "adolescente";
  $categorias[] = "adulto";

  if(validaNome($nome) && validaIdade($idade)) {
    removerMensagemErro();
    if($idade >= 6 && $idade <= 12){
      setarMensagemSucesso("O atleta $nome compete na categoria $categorias[0]");
      return null;
    } else if($idade >= 13 && $idade <= 18){
      setarMensagemSucesso("O atleta $nome compete na categoria $categorias[1]");
      return null;
    } else if($idade >= 19){
      setarMensagemSucesso("O atleta $nome compete na categoria $categorias[2]");
      return null;
    } else {
      removerMensagemSucesso();
      setarMensagemErro("O atleta não compete!");
      return null;
    }
  } else {
    removerMensagemSucesso();
    return obterMensagemErro();
  }
}




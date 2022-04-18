<?php

function validaNome(string $nome) : bool {
  if(empty($nome)) {
    setarMensagemErro("O nome não pode ser vazio. Informe um nome.");
    return false;
  }else if(strlen($nome) < 3) {
    setarMensagemErro("O nome não pode conter menos de 3 caracteres.");
    return false;
  }else if(strlen($nome) > 40) {
    setarMensagemErro("O nome é muito extenso.");
    return false;
  }
  return true;
}

function validaIdade(string $idade) : bool {
  if(empty($idade)) {
    setarMensagemErro("A idade não pode ser vazia.");
    return false;
  }else if(!is_numeric($idade)) {
    setarMensagemErro("Idade não válida.");
    return false;
  }
  return true;
}



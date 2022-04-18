<?php

include "services/servicoValidacao.php";
include "services/servicoCategoriaCompetidor.php";
include "services/servicoMensagemSessao.php";


$nome = $_POST["nome"];
$idade = $_POST["idade"];

defineCategoriaCompetidor($nome, $idade);

header("Location: index.php");
<?php

require 'config.php';
require 'connection.php';
require 'database.php';

$cliente = array(
    'nome' => $_POST['tNome'],
    'email' => $_POST['tEmail'],
    'endereco' => $_POST['tEndereco'],
    'telefone' => $_POST['tTelefone'],
    'telefone2' => $_POST['tTelefone2']
);

$grava = DBUpdate('clientes', $cliente, 'id ='.$_POST['id']);


if ($grava) {
    header("Location:index.php");
} else {
    echo 'Erro ao salvar';
}

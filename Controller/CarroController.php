<?php
include("../includes/Variaveis.php");

include("../Class/ClassCrud.php");

$crud = new ClassCrud();

$crud->insertDB(
    "carro",
    "?,?,?",
    array(0, $nome, $marca)
);

$_SESSION['mensagem'] = "Cadastrado com sucesso!";
header('Location: ../carro/lista.php');

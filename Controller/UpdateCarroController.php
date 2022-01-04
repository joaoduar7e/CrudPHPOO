<?php
include("../includes/Variaveis.php");
include("../Class/ClassCrud.php");

$crud = new ClassCrud();
$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$crud->updateDB(
    "carro",
    "nome=?, marca=?",
    "id=?",
    array($nome, $marca, $id)
);

echo "Atualizado com Sucesso!";
header('Location: ../carro/lista.php');

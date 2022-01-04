<?php
include("../includes/Variaveis.php");
include("../Class/ClassCrud.php");

$crud = new ClassCrud();
$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS); 
$crud->updateDB(
    "marca",
    "nome=?",
    "id=?",
    array($nome, $id)
);

echo "Atualizado com Sucesso!";
header('Location: ../marca/lista.php');
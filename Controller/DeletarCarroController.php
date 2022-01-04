<?php
include("../Class/ClassCrud.php");

$crud = new ClassCrud();
$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$crud->deleteDB(
    "carro",
    "id=?",
    array($idUser)
);

header('Location: ../carro/lista.php');

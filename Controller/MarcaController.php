<?php
include("../includes/Variaveis.php");

include("../Class/ClassCrud.php");

$crud = new ClassCrud();
 
$crud->insertDB(
    "marca",
    "?,?",
    array(0, $nome));

echo "Cadastro Realizado com Sucesso!";
header('Location: ../marca/lista.php');
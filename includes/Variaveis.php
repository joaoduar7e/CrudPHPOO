<?php


if (isset($_POST['id'])) {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $id = "";
}


if (isset($_POST['nome'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['nome'])) {
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $nome = "";
}


if (isset($_POST['marca'])) {
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['marca'])) {
    $marca = filter_input(INPUT_GET, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $marca = "";
}

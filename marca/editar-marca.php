<?php

include_once '../includes/header.php';
include('../Class/ClassCrud.php');

if (isset($_GET['id'])) {
    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "marca", "where Id=?", array($_GET['id']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $id = $Fetch['id'];
    $nome = $Fetch['nome'];
}

?>

<div class="row">
    <div class="col">
        <!-- action no qual o formaluario para processar as informações -->
        <form class="espacamento" action="../Controller/UpdateController.php" method="POST">
            <h3 class="font-weight-light"> Editar marca</h3>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $nome ?>" placeholder="Nome">
            </div>

            <div style="text-align: right;">
                <button type="submit" name="btn-editar" class="btn btn-outline-success pequeno"> Atualizar </button>

                <a href="lista.php" class="btn btn-outline-info pequeno"> Lista de Marcas</a>
            </div>


        </form>
    </div>
</div>
<?php

include_once '../includes/header.php';
include('../Class/ClassCrud.php');

if (isset($_GET['id'])) {
    $Acao = "Editar";

    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "carro", "where Id=?", array($_GET['id']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $id = $Fetch['id'];
    $nome = $Fetch['nome'];

    $crud = new ClassCrud();
    $MFetch = $crud->selectDB(
        "*",
        "marca",
        "",
        array()
    );
}

?>

<div class="row">
    <div class="col">
        <!-- action no qual o formaluario para processar as informações -->
        <form class="espacamento" action="../Controller/UpdateCarroController.php" method="POST">
            <h3 class="font-weight-light"> Editar Carro</h3>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $nome ?>" placeholder="Nome">
            </div>

            <div class="form-group">
                <select class="form-control form-control" name="marca">
                    <?php while ($fetch = $MFetch->fetch(PDO::FETCH_ASSOC)) :; ?>
                        <option value="<?php echo $fetch['nome']; ?>"> <?php echo $fetch['nome'] ?> </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div style="text-align: right;">
                <button type="submit" name="btn-editarC" class="btn btn-outline-success pequeno"> Atualizar </button>

                <a href="lista.php" class="btn btn-outline-info pequeno"> Lista de Carros</a>
            </div>


        </form>
    </div>
</div>
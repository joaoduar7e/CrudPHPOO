<?php
include_once '../includes/header.php';
include('../Class/ClassCrud.php');
?>

<div class="row">

    <div class="col-sm-6">
        <h3 class="font-weight-light"> Carros cadastrados</h3>
    </div>

    <div class="col-sm-4">
        <br />
    </div>


    <div class="col col-lg-2">
        <a href="adicionar.php" class="btn btn-info float-right"> Adicionar carro </a>
    </div>
</div>
<table class="table table-striped">

    <tr>
        <td>Nome</td>
        <td>Marca</td>
        <td class="float-right">Ações</td>

    </tr>
    <?php
    $crud = new ClassCrud();
    $BFetch = $crud->selectDB(
        "*",
        "carro",
        "",
        array()
    );

    while ($fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    ?>

        <tr>
            <td> <?php echo $fetch['nome'] ?> </td>
            <td> <?php echo $fetch['marca'] ?> </td>
            <td>

                <a class="float-right" href="<?php echo "../Controller/DeletarCarroController.php?id={$fetch['id']}"; ?>">
                    <i class="material-icons"> delete </i> </a>

                <a href="<?php echo "editar-carro.php?id={$fetch['id']}"; ?>" class="float-right">
                    <i class="material-icons"> edit </i> </a>


                <a class="float-right" href="<?php echo "view-carro.php?id={$fetch['id']}"; ?>">
                    <i class="material-icons"> info </i> </a>
            </td>
        </tr>

    <?php } ?>
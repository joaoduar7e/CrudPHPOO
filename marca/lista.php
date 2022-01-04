<?php
include_once '../includes/header.php';
include('../Class/ClassCrud.php');
?>


<div class="row">

    <div class="col-sm-6">
        <h3 class="font-weight-light"> Marcas cadastradas</h3>
    </div>

    <div class="col-sm-4">
        <br />
    </div>


    <div class="col col-lg-2">
        <a href="adicionar.php" class="btn btn-info float-right"> Adicionar marca </a>
    </div>
</div>
<table class="table table-striped">

    <tr>
        <td>Nome</td>
        <td class="float-right">Ações</td>

    </tr>
    <?php
    $crud = new ClassCrud();
    $BFetch = $crud->selectDB(
        "*",
        "marca",
        "",
        array()
    );

    while ($fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
    ?>

        <tr>
            <td> <?php echo $fetch['nome'] ?> </td>
            <td>

                <a href="#modal<?php echo $fetch['id']; ?>" class="float-right" data-toggle="modal" data-target="#modal<?php echo $fetch['id']; ?>">
                    <i class="material-icons"> delete </i> </a>


                <a href="<?php echo "editar-marca.php?id={$fetch['id']}"; ?>" class="float-right">
                    <i class="material-icons"> edit </i> </a>


                <a class="float-right" href="<?php echo "view-marca.php?id={$fetch['id']}"; ?>">
                    <i class="material-icons"> info </i> </a>
            </td>
        </tr>

        <div class="modal fade" id="modal<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Opa!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Deseja realmente excluir a marca?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                        <form action="<?php echo "../Controller/DeletarMarcaController.php?id={$fetch['id']}"; ?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">

                            <button type="submit" name="btn-deletar" class="btn btn-primary">Sim, desejo
                                deletar</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    <?php
    } ?>
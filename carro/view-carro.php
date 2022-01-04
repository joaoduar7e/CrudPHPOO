<?php
include_once '../includes/header.php';
include('../Class/ClassCrud.php');


$crud = new ClassCrud();
$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$Bfetch = $crud->selectDB(
    "*",
    "carro",
    "where id=?",
    array($idUser)
);
$fetch = $Bfetch->fetch(PDO::FETCH_ASSOC);
?>

<div class="row">
    <div class="col">
        <!-- action no qual o formaluario para processar as informações -->

        <h3 class="font-weight-light"> Visualizar Carro</h3>

        <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">

        <div class="form-group">

            <label for="nome" class="col-sm-2 col-form-label"> ID: </label>
            <input disabled="true" class="form-group" type="text" name="id" id="id" value="<?php echo $fetch['id']; ?>" placeholder="ID">

            <br />
            <label class="col-sm-2 col-form-label"> Nome: </label>
            <input disabled="true" class="form-group" type="text" name="nome" id="nome" value="<?php echo $fetch['nome'] ?>" placeholder="Nome">

            <br />
            <label class="col-sm-2 col-form-label"> Marca: </label>
            <input disabled="true" class="form-group" type="text" name="marca" id="marca" value="<?php echo $fetch['marca'] ?>" placeholder="Nome">

        </div>

        <div style="text-align: right;">
            <a href="lista.php" class="btn btn-outline-info pequeno"> Lista de Carros</a>
        </div>

    </div>
</div>

</div>


<?php
?>
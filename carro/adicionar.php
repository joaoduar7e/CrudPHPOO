<?php
include_once '../includes/header.php';
include('../Class/ClassCrud.php');

$crud = new ClassCrud();
$MFetch = $crud->selectDB(
    "*",
    "marca",
    "",
    array()
);
?>
<div class="container">
    <div class="py-5 text-center">
        <div class="row">
            <div class="col">

                <!-- action no qual o formaluario para processar as informações -->
                <form name="FormCarro" class="espacamento" method="POST" action="../Controller/CarroController.php">
                    <h3 class="font-weight-light"> Novo Carro</h3>

                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <select class="form-control form-control" name="marca">
                            <?php while ($fetch = $MFetch->fetch(PDO::FETCH_ASSOC)) :; ?>
                                <option value="<?php echo $fetch['nome']; ?>"> <?php echo $fetch['nome'] ?> </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div style="text-align: right;">
                        <button type="submit" name="btn-cadastrar" class="btn btn-outline-success pequeno"> Cadastrar </button>
                        <a href="lista.php" class="btn btn-outline-info pequeno"> Lista de Marcas</a>
                    </div>
                </form>
            </div>
        </div>
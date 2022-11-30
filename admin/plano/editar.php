<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/PlanoController.php";
    $plano = editar($_GET['id']);
?>

<?php include_once CABECALHO; ?>

<main class="container">

    <div class="row">
        <div class="col-sm-9 mx-auto">

        <h3 class="text-center m-4">Editar Plano</h3>

        <form action="/admin/plano/editar?id=<?=$plano['id']?>" method="post" class="row g-3">

            <?php include_once "_formulario.php"; ?>
    
        </form>
        
        </div>
    </div>

</main>


<?php include_once RODAPE; ?>

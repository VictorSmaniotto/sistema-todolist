<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/PaginaController.php';
    $pagina = editar($_GET['id']);
?>

<?php include_once CABECALHO; ?>

<main class="container mt-5 mb-5">


<div class="col-sm-9 mx-auto">

            <h3 class="text-center m-4">Editar Página</h3>

            <form action="/admin/pagina/editar?id=<?=$pagina['id']?>" method="post" class="row g-3">

                <?php include '_formulario.php' ?>

            </form>

        </div>
    </div>

</main>

<?php include_once RODAPE; ?>
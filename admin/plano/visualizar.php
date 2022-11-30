<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/PlanoController.php";

    $plano = visualizar($_GET['id']);
?>

<?php include_once CABECALHO; ?>

<main class="container">

    <div class="row">
        <div class="col-sm-9 mx-auto">

            <h3 class="text-center mt-4">Detalhes do Plano</h3>

            <table class="table table-striped mt-5">
                <tr>
                    <th witdh="180">Título</th>
                    <td><?=$plano['titulo']?></td>
                </tr>
                <tr>
                    <th witdh="180">Valor</th>
                    <td>R$ <?=$plano['valor']?></td>
                </tr>
                <tr>
                    <th witdh="180">Descrição</th>
                    <td><?=$plano['descricao']?></td>
                </tr>
            </table>

            <div class="row">
                <div class="col-12">
                    <a href="/admin/plano/editar?id=<?=$plano['id']?>" class="btn btn-primary">Editar</a>
                    <a href="/admin/plano" class="btn btn-light">Cancelar</a>
                </div>
            </div>


        
        </div>
    </div>

</main>


<?php include_once RODAPE; ?>

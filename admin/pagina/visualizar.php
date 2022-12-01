<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/PaginaController.php';

$pagina = visualizar($_GET['id']); #Para pegar o id da URL, mas precisa  estar configurado no link

?>

<?php include_once CABECALHO; ?>

<main class="container mt-5 mb-5">

<div class="row">

            <div class="col-sm-9 mx-auto">

                <h3 class="text-center mt-4">Detalhes da Página</h3>

                <table class="table table-striped mt-3">
                    <tr>
                        <th width="180">Titulo</th>
                        <td><?=$pagina['titulo'] ?></td>
                    </tr>
                    <tr>
                        <th width="100">Slug</th>
                        <td><?=$pagina['slug']?></td>
                    </tr>
                    <tr>
                        <th width="100">Descrição</th>
                        <td><?=$pagina['descricao']?> </td>
                    </tr>
                </table>

                <div class="row">
                    <div class="col-12 p-3">
                        <a class="btn btn-primary" href="/admin/pagina/editar?id=<?=$pagina['id']?>">Editar</a>
                        <a class="btn btn-light" href="/admin/pagina">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>


</main>

<?php include_once RODAPE; ?>
<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/PlanoController.php";

    $planos = index();

    
?>

<?php include_once CABECALHO; ?>

<main class="container">

    <div class="row">
        <div class="col-sm-9 mx-auto">

        <h3 class="text-center mt-4">Lista de Planos</h3>

        <div class="row">
            <div class="col-12 text-end">
                <a href="/admin/plano/cadastrar" class="btn btn-primary"><i class="fas fa-plus"></i> Adicionar</a>
            </div>
        </div>

        <table class="table table-striped mt-5">
            <thead>
                <tr>
                   <th>#</th> 
                   <th>Título</th> 
                   <th>Valor</th> 
                   <th width="140">Ação</th> 
                </tr>
            </thead>
            <tbody>

                <?php foreach($planos as $plan): ?>
                <tr>
                    <td><?=$plan['id'] ?></td>
                    <td><?=$plan['titulo'] ?></td>
                    <td>R$ <?=$plan['valor'] ?></td>
                    <td>
                        <a href="/admin/plano/visualizar?id=<?=$plan['id'] ?>" class="btn btn-sm btn-light"><i class="fas fa-eye"></i></a>
                        <a href="/admin/plano/editar?id=<?=$plan['id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/admin/plano/?id=<?=$plan['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>


            </tbody>

        </table>


        
        </div>
    </div>

</main>


<?php include_once RODAPE; ?>

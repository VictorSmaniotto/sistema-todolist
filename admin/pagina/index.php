<?php

require_once $_SERVER['DOCUMENT_ROOT']."/controllers/PaginaController.php";

if(isset($_GET['deletar'])){
    deletar($_GET['deletar']);
}else{
    $pagina = index();
}

?>

<?php include_once CABECALHO; ?>

<main class="container mt-5 mb-5">

<div class="row">

            <div class="col-sm-9 mx-auto">

                <h3 class="text-center mt-4">Lista de Páginas</h3>

                <div class="row">
                    <div class="col-12 text-end p-3">
                        <a class="btn btn-primary" href="/admin/pagina/cadastrar">
                            <i class="fas fa-plus"></i>
                            Adicionar</a>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">slug</th>
                            <th scope="col" width="140" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Linha do Registro -->
                        <?php foreach($pagina as $pag): ?>
                        <tr>
                            <th scope="row"><?=$pag['id'] ?></th>
                            <td><?=$pag['titulo'] ?></td>
                            <td><?=$pag['slug'] ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-light" href="/admin/pagina/visualizar?id=<?=$pag['id'] ?>">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-primary" href="/admin/pagina/editar?id=<?=$pag['id']?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-danger deletar" href="/admin/pagina?deletar=<?=$pag['id'] ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach?>
                        <!-- Final Linha do Registro -->
                    </tbody>
                </table>


            </div>
        </div>

</main>

<?php include_once RODAPE; ?>
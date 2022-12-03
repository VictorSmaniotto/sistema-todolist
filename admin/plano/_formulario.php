<div class="col-12 col-md-8">
    <label class="form-label" for="titulo">Título</label>
    <input type="text" name="titulo" class="form-control" id="titulo" value="<?=$plano['titulo']?? '' ?>"> 
    <?= formErro('titulo'); ?><!--Se tiver valor no $plano['titulo'] mostra ele, senão mostra vazio -->
</div>

<div class="col-12 col-md-4">
    <label class="form-label" for="valor">Valor</label>
    <input type="text" name="valor" class="form-control" id="valor" value="<?=$plano['valor']?? '' ?>">
    <?= formErro('valor'); ?>
</div>

<div class="col-12">
    <label class="form-label" for="descricao">Descrição</label>
   <textarea name="descricao" class="form-control" id="descricao"><?=$plano['descricao']?? '' ?></textarea> 
   <?= formErro('descricao'); ?><!-- Em textarea coloca no meio -->
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="/admin/plano" class="btn btn-light">Cancelar</a>
</div>
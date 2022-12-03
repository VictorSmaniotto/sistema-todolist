<div class="col-12">
                        <label for="titulo">Titulo</label>
                        <input type="titulo" name="titulo" id="titulo" class="form-control" value="<?=$pagina['titulo'] ?? '' ?>"
                            placeholder="Digite o titulo" autofocus>
                        <?=formErro('titulo');?>
                    </div>

                    <div class="col-12">
                        <label for="slug">Slug</label>
                        <input type="slug" name='slug' id="slug" class="form-control" value="<?=$pagina['slug']?? ''?>"
                            placeholder="Digite o Slug">
                            <?=formErro('slug');?>
                    </div>

                    <div class="col-12">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control" rows="5"><?=$pagina['descricao']?? '' ?></textarea>
                        <?=formErro('descricao');?>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                        <a class="btn btn-light" href="/admin/pagina">Cancelar</a>
                     </div>
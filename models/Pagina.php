<?php

require_once $_SERVER['DOCUMENT_ROOT']."/helpers/Config.php";

require_once BANCO_DE_DADOS;


function listarPaginas(){
    $db = conexao();
    $sql = "SELECT * FROM paginas";

    try {
        
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die($e->getMessage());
        return false;
    }
}

function buscarPagina($id){
    $db = conexao();
    $sql = "SELECT * FROM PAGINAS WHERE id=:id";

    try{
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }catch(\PDOException $e){
        die($e->getMessage());
        return false;
    }
}

function cadastrarPagina($pagina){
    $db = conexao();
    $sql = "INSERT INTO paginas (titulo, slug, descricao)
                        VALUES (:titulo, :slug, :descricao)";
    
    try{
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":titulo", $pagina['titulo'], PDO::PARAM_STR);
        $stmt->bindParam(":slug", $pagina['slug'], PDO::PARAM_STR);
        $stmt->bindParam(":descricao", $pagina['descricao'],PDO::PARAM_STR);
        $stmt->execute();
        return true;
        
    }catch(PDOException $e){
        die($e->getMessage());
        // return false;
    }
}

function editarPagina($pagina, $id){
    $db = conexao();
    $sql = "UPDATE paginas SET
                             titulo=:titulo,
                             slug=:slug,
                             descricao=:descricao
                            WHERE id=:id";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":titulo", $pagina['titulo'], PDO::PARAM_STR);
        $stmt->bindParam(":slug", $pagina['slug'], PDO::PARAM_STR);
        $stmt->bindParam(":descricao", $pagina['descricao'],PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return true;
        
    } catch (PDOException $e) {
        die($e->getMessage());
        return false;
    }                            
}

?>
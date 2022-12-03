<?php

require_once BANCO_DE_DADOS;


function listarPlanos(){

    $db = conexao();
    $sql = "SELECT * FROM planos";
 
    try{

        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e->getMessage());
    }

}

function buscarPlano($id){

    $db = conexao();
    $sql = "SELECT *FROM planos WHERE id=:id";

    try{

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e->getMessage());

    }
    

}

function cadastrarPlano($plano){

    if (validaPlano($plano))
    {return false;}
        

    $db = conexao();
    $sql = "INSERT INTO PLANOS (titulo, valor, descricao) 
                        VALUES (:titulo, :valor, :descricao)";

    try{

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':titulo', $plano['titulo'], PDO::PARAM_STR);
        $stmt->bindParam(':valor', $plano['valor'], PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $plano['descricao'], PDO::PARAM_STR);
        $stmt->execute();
        return true;

    }catch(PDOException $e){
        die($e->getMessage()); #Não deixar em ambiente de produção
        return false;
    }                     
}

function editarPlano($plano, $id){

    if (validaPlano($plano))
    {return false;}
        

    $db = conexao();
    $sql = "UPDATE planos SET
                            titulo=:titulo,
                            valor=:valor,
                            descricao=:descricao
                            
                          WHERE id=:id";

    try{
        
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":titulo", $plano['titulo'], PDO::PARAM_STR);
        $stmt->bindParam(":valor", $plano['valor'], PDO::PARAM_STR);
        $stmt->bindParam(":descricao", $plano['descricao'], PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return  true;


    }catch(PDOException $e){
        die($e->getMessage());
        return false;
    }
}

function deletarPlano($id){
    $db = conexao();
    $sql = "DELETE FROM planos WHERE id=:id";

    try {

        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return true;
        
    } catch (PDOException $e) {
        die($e->getMessage());
        return false;
    }
}

function validaPlano($plano){
    $validacao = false;

    if($plano['titulo'] == ''){
        $_SESSION['titulo'] = 'Campo Obrigatório';
        $validacao = true;
    }

    if($plano['descricao'] == ''){
        $_SESSION['descricao'] = 'Campo Obrigatório';
        $validacao = true;
    }

    if($plano['valor'] == ''){
        $_SESSION['valor'] = 'Campo Obrigatório';
        $validacao = true;
    }

    return $validacao;
}

<?php

require_once BANCO_DE_DADOS;

function consultarDadoUsuario($busca){
    
    $db = conexao();
    $sql = "SELECT * FROM usuarios WHERE email=:email";


    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":email", $busca, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die($e->getMessage());
        return false;
    }
}
<?php

require_once $_SERVER['DOCUMENT_ROOT']."/helpers/Config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/helpers/Funcoes.php";

require_once $_SERVER['DOCUMENT_ROOT']."/models/Pagina.php";

function index(){
    $pagina = listarPaginas();
    return $pagina;
}

function visualizar($id){
    $pagina = buscarPagina($id);
    return $pagina;
}

function cadastrar(){
    $pagina = [];

    if(!empty($_POST)){                         #este if verifica se os valores do POST NÃO estão vazios
        $pagina['titulo'] = $_POST['titulo'];    #Caso não estejam, o vetor pagina vai receber os dados presentes no POST
        $pagina['slug'] = $_POST['slug'];
        $pagina['descricao'] = $_POST['descricao'];

        if(cadastrarPagina($pagina)){   #se executar essa função, retornamos para o index
            header("Location:/admin/pagina");
            exit;
            
        }
    }
    return $pagina;
}

function editar($id){
    $pagina = buscarPagina($id);

    if(!empty($_POST)){
        $pagina['titulo'] = $_POST['titulo'];
        $pagina['slug'] = $_POST['slug'];
        $pagina['descricao'] = $_POST['descricao'];

        if(editarPagina($pagina, $id)){
            header("Location:/admin/pagina");
            exit;
        }
    }
    return $pagina;

}

function deletar($id){
    if(deletarPagina($id)){
        header("Location:/admin/pagina");
        exit;
    }
    
}

?>
<?php


require_once $_SERVER['DOCUMENT_ROOT']."/helpers/Config.php";

require_once $_SERVER['DOCUMENT_ROOT']."/models/Usuario.php";

function validarLogin(){

    $login = [];

    if(!empty($_POST)){
       
        $login['email'] = $_POST['email'];
        $login['senha'] = $_POST['senha'];

        $usuario = consultarDadoUsuario($login['email']);

        if($usuario){
            if(password_verify($login['senha'],$usuario['senha'])){
                header("Location:/admin/");
            }
        }
    }
}
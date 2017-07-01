<?php

    $lista_usuarios = file_get_contents("usuario.json");
    $lista_usuarios_d = json_decode($lista_usuarios, true);

    session_start();

    function login(){
        if ($_POST['login'] == "Yara" && $_POST['senha'] == "admin") {

            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['logim'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];

            $_SESSION['usuario_online'] = true;


            //redireciona o usuario para index.php
            header('Location: index.php');

        } else {

            header('Location: login.php');
        }

    }

    function sair(){
        session_destroy();
        header('Location: login.php');
    }

    //ROTAS
    if($_POST['login_form'] == "acessar"){
        login();
    }

    if($_POST['login_form'] == "sair"){
        sair();
    }
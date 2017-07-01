<?php

    session_start();
    if(!isset($_SESSION['usuario_online']) OR !($_SESSION['usuario_online'] == true) ){
        //usuario off
        header('Location: login.php');
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>

    <div class="social">

        <a href="verifica_usuario.php?evento=clicou_botao_sair" class="sair">sair</a>

        <img src="https://scontent.fjoi2-1.fna.fbcdn.net/v/t1.0-9/18033320_1323401271089602_4460625508591272655_n.jpg?oh=016fa40b1712a09b9f411a95753eec10&oe=59C39826" alt="" width="200" height="200">
        <h3>Bem vindo!</h3>
    </div>

</body>
</html>
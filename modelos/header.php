<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../_css/header.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta/css/bootstrap.css" >

        <!--fonte Google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body style="margin: 0px 0px 0px 0px;">
        <header id="cabecalho">
            <!--LOGO CABECALHO-->
            <img id="icone" src="../_imagens/logoNome.png" alt="Logo"/>

            <!--MENU PRINCIPAL-->
            <nav id="menu" onmouseout="mudaFoto('../_imagens/logo.png')" style="font-family: 'Open Sans', sans-serif;">﻿
                <h1>Menu Principal</h1>
                <ul>
                    <li onmouseover="mudaFoto('../_imagens/home.png')" ><a href="../index.html" target="_parent"> Home</a></li>
                    <li onmouseover="mudaFoto('../_imagens/especificacoes.png')" ><a href="../specs.html" target="_parent">Produtos</a></li>

                    <li onmouseover="mudaFoto('../_imagens/fotos.png')" ><a href="../sobre-nos.html" target="_parent">Sobre nós</a></li>
                    <li onmouseover="mudaFoto('../_imagens/contato.png')" ><a href="../fale-conosco.html" target="_parent">Fale conosco</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="pills-dropdown1-tab" href="#pills-dropdown1" role="tab" data-toggle="pill" aria-controls="pills-dropdown1">@fat</a>
                            <a class="dropdown-item" id="pills-dropdown1-tab" href="#pills-dropdown1" role="tab" data-toggle="pill" aria-controls="pills-dropdown1">@fat</a>
                            <a class="dropdown-item" id="pills-dropdown2-tab" href="#pills-dropdown2" role="tab" data-toggle="pill" aria-controls="pills-dropdown2">@mdo</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <!--poper.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript -->
        <script src="../bootstrap-4.0.0-beta/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
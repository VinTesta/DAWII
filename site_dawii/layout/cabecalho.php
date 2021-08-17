<?php

require_once("../vendor/autoload.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site DAWII</title>
    <link rel="stylesheet" href="../web/css/cabecalho.css">
    <link rel="stylesheet" href="../web/css/home-page.css">
    <link rel="stylesheet" href="../web/css/rodape.css">
    <link rel="shortcut icon" type="image/x-icon" href="../web/img/9593imgAjudante.ico">
    <script src="https://kit.fontawesome.com/072fea83f9.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="bg-navbar" id="navbar">
    <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i> 
    </label>
    <input type="checkbox" id="check">
    <a class="logo-navbar" href="../index.php">HOME</a>
    <ul class="nav-list">
        <li><a href="#tittle-container-cards" class="list-item">Produtos</a></li>
        <li><a href="#tittle-cursos" class="list-item">Cursos</a></li>
        <li><a href="javascript:void()" class="list-item">Sign In</a></li>
        <li><a href="../cadastro-cliente/" class="list-item">Sign Up</a></li>
    </ul>
</nav>

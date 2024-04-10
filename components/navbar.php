<?php 
include_once("header.php");
?>
<nav id="navbar">
    <a><h1>Election</h1></a>
    <img src="<?=$url?>public/icons/menu-hamburguer.png" class="icon">
    <ul>
        <li><a href="<?= $url?>index.php">Home</a></li>
        <li><a href="<?= $url?>informations.php">Informações</a></li>
        <li><a href="<?= $url?>ranking.php">Resultados</a></li>
        <li><a href="<?= $url?>help.php">Ajuda</a></li>
        <li><a href="<?= $url?>logout.php">Sair</a></li>
    </ul>
</nav>
<script src="<?= $url?>public/js/script.js"></script>

<?php
    include_once("components/router.php");
    $rf  = $ref["6"];
    require_once("components/header.php");
    require_once("database/dbregister.php");
?>
<div class="container" style="margin-top:-5em;">
    <div class="msg">
        <? if($_SESSION["candidate_msg"]) :?>
            <h2 class="error_msg">
                <?=$_SESSION["candidate_msg"] ?></h2>
            <? unset($_SESSION["candidate_msg"]); ?>
        <? endif;?>
    </div>
<div class="wrapper">
<form class="register" action="<?=$url?>candidate.php" method="POST">
<div class="form-control">
        <h1>Candidatando-me</h1>
    <div class="input-box">
        <!--<label for="user">Nome</label> -->
        <input type="text" name="candidate" placeholder="Qual é o seu nome?" required>
    </div>
    <div class="input-box">
    <!--<label for="number">N° do BI</label> -->
        <input type="text" name="candidate_bi" placeholder="N° do BI" required>
    </div>
    <div class="input-box">
    <!--<label for="password">Senha</label> -->
        <input type="password" name="candidate_password" placeholder="Escolha uma senha" required>
    </div>
    <div class="input-box">
        <input type="submit" name="Candidatar-me" value="Candidatar-me">
    </div>
    <!--
        <ul class="login-options">
        <li id="my-sigin-option-f" class="my-sigin-option"><a>Esqueceu sua senha?</a></li>
        <li id="my-sigin-option-l" class="my-sigin-option"><a>Fazer login?</a></li>
    </ul>
    -->
    </div>
</form>
</div>
</div>

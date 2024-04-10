<?php
    include_once("components/router.php");
    $rf  = $ref["5"];
    require_once("components/header.php");
    require_once("database/dbregister.php");
?>
<div class="container" style="margin-top:-4em;">
    <div class="msg">
        <? if($_SESSION["register_msg"]) :?>
            <h2 class="error_msg"><?=$_SESSION["register_msg"] ?></h2>
            <? unset($_SESSION["register_msg"]); ?>
        <? endif;?>
    </div>
<div class="wrapper">
<form class="register" action="<?=$url?>register.php" method="POST">
<div class="form-control">
        <h1>Registrando-me</h1>
    <div class="input-box">
        <!--<label for="user">Nome</label> -->
        <input type="text" name="user" placeholder="Qual é o seu nome?" required>
    </div>
    <div class="input-box">
    <!-- <label for="number">N° do BI</label>-->
        <input type="text" name="number" placeholder="N° do BI" required>
    </div>
    <div class="input-box">
    <!-- <label for="password">Senha</label>-->
        <input type="password" name="password" placeholder="Escolha uma senha" required>
    </div>
    <div class="input-box">
        <input type="submit" name="Registrar-me" value="Registrar-me">
    </div>
    <ul class="login-options">
        <li id="my-sigin-option-f" class="my-sigin-option"><a href="#">Esqueceu sua senha?</a></li>
        <li id="my-sigin-option-l" class="my-sigin-option"><a href="<?=$url ?>login.php">Fazer login?</a></li>
    </ul>
    </div>
</form>

</div></div>

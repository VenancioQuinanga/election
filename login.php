<?php
include_once("components/router.php");
$rf  = $ref["4"];
require_once("components/header.php");
require_once("database/dblogin.php");

?>

<div class="container">
<? if($_SESSION["user"]) :?>
    <div class="msg">
            <h2 class="error_msg">
                <?=$_SESSION["user_msg"] ?></h2>
            <? unset($_SESSION["user_msg"]); ?>
    </div>
    <? endif;?>
<div class="wrapper">
<form class="login" action="<?=$url?>login.php" method="POST">
    <div class="form-control">
        <h1>Fazendo login</h1>
    <div class="input-box">
        <!--<label for="user">Nome</label>-->
        <input type="text" name="user" placeholder="Usuario" required>
    </div>
    <div class="input-box">
    <!--<label for="password">Senha</label> -->
        <input type="password" name="password" placeholder="Escolha uma senha" required>
    </div>
    <div class="input-box">
        <input type="submit" name="entrar" value="Entrar">
    </div>

    <ul class="login-options">
        <li id="my-sigin-option-f" class="my-sigin-option"><a href="#">Esqueceu sua senha?</a></li>
        <li id="my-sigin-option-l" class="my-sigin-option"><a href="<?=$url ?>register.php">Criar conta?</a></li>
    </ul>
    
    </div>
</form>
</div>
</div>
<?php
include_once("components/router.php");
$rf  = $ref["3"];
include_once("components/navbar.php");
include_once("database/dbhelp.php")
?>
<div class="container">
    <div class="wrapper">
    <form method="POST" action="<?=$url?>help.php">
        <div class="form-control">
        <h1>Ajuda</h1>
        <div class="input-box">
            <!--<label for="help-email">Email</label> -->
                <input type="email" name="help-email" placeholder="Qual é o seu email?" required>
            </div>
            <div class="input-box">
            <!--<label for="help-msg">Assunto</label> -->
                <input type="text" name="help-msg" placeholder="Qual é o problema?" required>
            </div>
            <div class="input-box">
                <input type="submit" name="help" value="Enviar">
            </div>
        </div>
    </form>
    </div>
    
<div class="last-footer">
<?php
include_once("components/footer.php");
?>
</div>
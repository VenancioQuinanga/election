<?php
include_once("components/router.php");
 $rf  = $ref["0"];
include_once("components/navbar.php");
require_once("database/dblogin.php");
?>
<div class="container">
<div class="welcome-msg">
        <? if(isset($_SESSION["msg"])) :?>
            <h2 style="color:green;">
                <?=$_SESSION["msg"] ;unset($_SESSION["msg"]); ?></h2>
        <? endif;?>
    </div>
        <div class="main">
            <p>O <i>election</i> é o software que lhe permitirá exercer
            o seu direito de votar em seu novo dirigente .
            </p>
            <p>Voce poderá votar quando e onde quiser ou seja,não tera de se deslocar.</p>
            <p>Poderá votar em casa,no trabalho,na escola,etc. E no horário que quiser.</p>
        </div>
        <a href="<?= $url?>informations.php"><input type="button" value="Não perca tempo vote ja "></a>
    </div>
<?php
include_once("components/footer.php");
?>
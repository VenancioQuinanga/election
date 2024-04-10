<?php 
include_once("components/router.php");
$rf  = $ref["7"];
include_once("components/navbar.php");
include_once("database/dbvote.php");
include_once("database/dblogin.php");
?>
<div class="container">
<div class="wrapper">
    <form action="<?=$url ?>vote.php" method="POST">
    <div class="form-control">
        <h1>Votando</h1>
    <div class="input-box">
        <!--<label for="cand">Partido</label> -->
        <select name="cand">
            <option>Escolha o seu partido</option>
            <?php foreach($candidate as $candidating):?>
                <option value="<?=$candidating["id"] ?>"><?=$candidating["candidate_name"] ?></option>
            <?php endforeach;?>
        </select>
        <input type="hidden" name="user_id" value="<?=$_SESSION["user_id"] ?>">
        <input type="hidden" name="candidate_id" value="<?=$_SESSION["candidate_id"] ?>">
    </div>
    <div class="input-box">
        <input type="submit"name="votar" value="votar">
    </div>
    </div>
</form>
</div>
</div>
<?php 
include_once("components/footer.php");
?>
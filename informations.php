<?php
include_once("components/router.php");
$rf  = $ref["1"];
include_once("components/navbar.php");
?>
<div class="info">
<h2>Informações</h2>
<p>Como fasso para votar?</p>
<ul class="info-list">
    <li>
    Primeiramente teras de te <a href="<?=$url ?>register.php">registrar</a> no sistema.</li>
    <li>
        Depois fazer <a href="<?=$url ?>login.php">login</a> no sistema.</li>
        <li>
        Asseguir poderás exercer o teu direito de votar finalmente.</li>
</ul>
</div>
<?php
include_once("components/footer.php");
?>
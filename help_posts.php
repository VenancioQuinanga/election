<?php

include_once("components/router.php");
$rf  = $ref["8"];
include_once("components/navbar.php");
include_once("database/dbhelp.php")
?>

<div class="container">
<div class="help-container">
    <table>
        <thead>
            <th>Contacto</th>
            <th>Assunto</th>
        </thead>
        <tbory>
    <?php foreach($help as $hp):?>
        <tr>
        <td><?=$hp["email"]?></td>
        <td><?=$hp["affair"]?></td>
    <?php endforeach;?>
        </tr>
        </tbory>
    </table>
</div>
</div>

<?php
include_once("components/footer.php");
?>
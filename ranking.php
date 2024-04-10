<?php
 include_once("components/router.php");
 $rf  = $ref["2"];
include_once("components/navbar.php");
include_once("database/dbvote.php");
?>
<div class="container">
<div class="table">
<table id="ranking">
<caption><h2>Resultado das eleições</h2></caption>
    <thead>
        <tr>
            <th>Partido</th>
            <th> N° de votos</th>
        </tr>
    </thead>
    <tbory>
        <?php foreach($ranking as $rank) :?>
            <tr>
                <td><?=$rank["candidate_name"] ?></td>
                <td><?=$rank["votes"] ?></td>
            </tr>
        <?php endforeach; ?>    
    </tbory>
</table>
</div>
</div>
<?php
include_once("components/footer.php");
?>
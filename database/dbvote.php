<?php
include_once("db.php");

$cand = $conn->query("SELECT * FROM candidates");
$candidate = $cand->fetchAll();

$rank = $conn->query("SELECT * FROM candidates ORDER BY votes DESC");
$ranking = $rank->fetchAll();

if (isset($_POST["votar"])) {
    
    $cd = $_POST["cand"];
    $id = $_POST["user_id"];
    $user = $_POST["candidate_id"];

    if ($user == null) {

        $vote = $conn->prepare("UPDATE users SET candidate_id = :cand WHERE id = :id");
        $vote->bindParam(":cand",$cd);
        $vote->bindParam(":id",$id);
        $vote->execute();

        $vote = $conn->prepare("SELECT votes FROM candidates WHERE id = :cand");
        $vote->bindParam(":cand",$cd);
        $vote->execute();

        $vts = $vote->fetchAll();
        $a = 1;

        foreach ($vts as $vt) {
            $votes = $vt["votes"] + $a;
        }

        $vote = $conn->prepare("UPDATE candidates SET votes = :votes WHERE id = :cand");
        $vote->bindParam(":votes",$votes);
        $vote->bindParam(":cand",$cd);
        $vote->execute();

    }

    header("Location:" . $uri . "index.php");
} 

?>
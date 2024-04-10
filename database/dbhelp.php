<?php
include_once("components/url.php");
include_once("db.php");

session_start();

if (isset($_POST["help"])) {
    $stmt = $conn->prepare("INSERT INTO help (email,affair) VALUES (:email,:affair)");
    $stmt->bindParam(":email",$_POST["help-email"]);
    $stmt->bindParam(":affair",$_POST["help-msg"]);
    $stmt->execute();
    header("Location:".$url."help.php");
    
    $_SESSION["help"] = "Mensagem enviada com sucesso";

}else{

}
$stmt = $conn->prepare("SELECT * FROM help");
    $stmt->execute();
    $help = $stmt->fetchAll();

?>
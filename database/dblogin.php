<?php

$uri = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

include_once("db.php");

session_start();
$_SESSION["msg"] = '';
$_SESSION["user_msg"] = "";

if (isset($_POST["entrar"])) {
    $data = $_POST;
    $user = $data["user"];
    $password = $data["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = :user");
    $stmt->bindParam(":user",$user);
    $stmt->execute();
    $login = $stmt->fetchAll();

if ($login){

foreach($login as $login){

    if ($login["password"] == $password) {
        $_SESSION["user"] = $login["user_name"];
        $_SESSION["user_id"] = $login["id"];
        $_SESSION["candidate_id"] = $login["candidate_id"];
        $_SESSION["msg"] =  "Eleitor/a : ".$_SESSION["user"];
        if ($_SESSION["candidate_id"] == null) {
            header("Location:" . $uri . "vote.php");
        }else {
            header("Location:" . $uri . "index.php");
        }

    }else{
        $_SESSION["user_msg"] =  "Senha incorrreta";
    }
    
}

}else{

    $_SESSION["user_msg"] = "Esta conta não existe";
    
}

}

?>
<?php
include_once("db.php");
$url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

session_start();

$_SESSION["register_msg"] = "";
$_SESSION["candidate_msg"] = "";
$data = $_POST;

if (isset($_POST["Registrar-me"])) {

    $user = $data["user"];
    $bi = $data["number"];
    $password = $data["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = :user");
    $stmt->bindParam(":user",$user);
    $stmt->execute();
    $register = $stmt->fetchAll();

    if (!$register) {
        $stmt = $conn->prepare("INSERT INTO users (user_name,bi,password) VALUES(:user_name,:bi,:password)");
        $stmt->bindParam(":user_name",$user);
        $stmt->bindParam(":bi",$bi);
        $stmt->bindParam(":password",$password);
        $stmt->execute();

        header("Location:". $url . "login.php");

    }else {

        $_SESSION["register_msg"] = "Esta conta já existe";

    }

} else if (isset($_POST["Candidatar-me"])) {

        $candidate = $data["candidate"];
        $candidate_bi = $data["candidate_bi"];
        $candidate_password = $data["candidate_password"];

        $stmt = $conn->prepare("SELECT * FROM candidates WHERE candidate_name = :candidate_name");
        $stmt->bindParam(":candidate_name",$candidate);
        $stmt->execute();
        $candidating = $stmt->fetchAll();

        if (!$candidating) {
            $stmt = $conn->prepare("INSERT INTO candidates (candidate_name,candidate_bi,candidate_password) VALUES(:candidate_name,:candidate_bi,:candidate_password)");
            $stmt->bindParam(":candidate_name",$candidate);
            $stmt->bindParam(":candidate_bi",$candidate_bi);
            $stmt->bindParam(":candidate_password",$candidate_password);
            $stmt->execute();

        } else {

            $_SESSION["candidate_msg"] = "Este candidato já existe";

        }

}

?>
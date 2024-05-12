<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $names = $_POST["names"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

try {
    require_once "db.inc.php";

    $query = "INSERT INTO users (names, email, comments) VALUES (?, ?, ?);";

    $stmt = $pdo->prepare($query);

    $stmt->execute([$names, $email, $comments]);

    $pdo = null;
    $stmt = null;

    header("location: ../index.php");

    die();
} catch (PDOException $i){
    die("connection failed " . $i->getMesage());
}

} else {
    header("location: ../index.php");
}
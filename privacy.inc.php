<?php
// GETTING STORED DOCUMENT FROM SERVER 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $docuMents = $_POST["documents"];


    try {
        require_once "db.inc.php";

        $query = "SELECT * FROM documents WHERE form;";

        $stmt = $pdo->Prepare($query);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = NULL;
        $stmt = NULL;

}catch (PDOException $i){
        die("connection failed " . $i);

    }

} else {
header("location ../privacy.php");
}
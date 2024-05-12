<?php

$dsn = "mysql: host=localhost; dbname=falcon";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = New PDO($dsn, $dbusername, $dbpassword);
    $pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $i){
        echo "connection failed " . $i->getMessage();
    }

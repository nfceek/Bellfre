<?php
// Bellfre Clearinghouse Database Connection

$host = "localhost";
$dbname = "adminfre_clearinghouse";
$username = "adminfre_agent";
$password = "Register100";


try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


} catch(PDOException $e){

    die("Database connection failed: " . $e->getMessage());

}

?>
<?php
// (A) DATABASE CONFIG - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "studentid");
define("DB_CHARSET", "utf8mb4_unicode_ci");
define("DB_USER", "root");
define("DB_PASSWORD", "");
 
// (B) CONNECT TO DATABASE
$dsn = "mysql:host=localhost;dbname=studentid";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo "เชื่อมต่อสำเร็จ";

    // (C) SEARCH
    $stmt = $pdo->prepare("SELECT * FROM `students` WHERE `s_id` LIKE ? OR `s_name` LIKE ? OR `s_class` LIKE ?  OR `s_link` LIKE ?");
    $stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
    $results = $stmt->fetchAll();
    if (isset($_POST["ajax"])) { echo json_encode($results); }
} catch (PDOException $e) {
    echo $e->getMessage();
}
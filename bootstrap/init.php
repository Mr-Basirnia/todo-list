<?php session_start();

include "constants.php";
include PROJECT_PATH . "vendor/autoload.php";
include PROJECT_PATH . "bootstrap/config.php";
include PROJECT_PATH . "bootstrap/helper.php";


try {
    $pdo = new PDO(
        "mysql:host=$databaseConfig->host;dbname=$databaseConfig->db;charset=utf8mb4",
        $databaseConfig->user,
        $databaseConfig->password,
    );
} catch (PDOException $e) {
    showMsgAndDie($e->getMessage());
}


include PROJECT_PATH . "libs/lib-auth.php";
include PROJECT_PATH . "libs/lib-folder.php";

<?php

include_once "constants.php";
include_once PROJECT_PATH . "vendor/autoload.php";
include_once PROJECT_PATH . "bootstrap/config.php";
include_once PROJECT_PATH . "bootstrap/helper.php";


try {
    $pdo = new PDO(
        "mysql:host=$databaseConfig->host;dbname=$databaseConfig->db;charset=utf8mb4",
        $databaseConfig->user,
        $databaseConfig->password,
    );
} catch (PDOException $e) {
    showMsgAndDie($e->getMessage());
}

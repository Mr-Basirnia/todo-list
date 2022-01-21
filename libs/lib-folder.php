<?php

/**
 * get folder but only logged user folders
 *
 * @return array
 */
function getFolders() : array
{
    global $pdo;

    $user_id = getCurrentUserId();
    $query = "SELECT * FROM folders WHERE user_id = ?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([2]);
    
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

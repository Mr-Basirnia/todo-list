<?php

/**
 * get tasks by folder id and without folder id
 *
 * @return array
 */
function getTasks() : array
{
    global $pdo;

    $folderId = $_GET['folder_id'] ?? null;

    $folderCondition = '';

    if (isset($folderId) && is_numeric($folderId)) {
        $folderCondition = "AND folder_id=$folderId";
    }

    $user_id = getCurrentUserId();
    $query = "SELECT * FROM tasks WHERE user_id = ? $folderCondition";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id]);
    
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

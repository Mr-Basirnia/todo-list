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


function deleteTask(int $taskId) : int
{
    global $pdo;
    $user_id = getCurrentUserId();

    $query = "DELETE FROM tasks WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$taskId,$user_id]);

    return $stmt->rowCount();
}


/**
 * change status task
 *
 * @param [type] $taskId
 * @return void
 */
function changeTaskStatus($taskId)
{
    global $pdo;
    $user_id = getCurrentUserId();

    $query = "UPDATE tasks SET is_done = 1 - is_done WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$taskId,$user_id]);

    return $stmt->rowCount();
}

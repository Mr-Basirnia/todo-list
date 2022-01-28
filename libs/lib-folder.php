<?php defined('PROJECT_PATH') or die();

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
    $stmt->execute([$user_id]);
    
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

/**
 * add folder
 *
 * @param string $folderName
 * @return void
 */
function addFolder(string $folderName)
{
    global $pdo;
    $user_id = getCurrentUserId();

    $query = "INSERT INTO folders (user_id,name) VALUES (?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user_id,$folderName]);

    return $stmt->rowCount() ? ['success'=>true,'result'=>$pdo->lastInsertId()] : false;
}


function deleteFolder($folderId)
{
    global $pdo;
    $user_id = getCurrentUserId();

    $query = "DELETE FROM folders WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$folderId,$user_id]);

    return $stmt->rowCount();
}

<?php

/**
 * register user
 *
 * @param array $params
 * @return boolean
 */
function registerUser(array $params) : bool
{
    $params = (object) $params;
    $password = password_hash($params->password, PASSWORD_BCRYPT);
    
    global $pdo;
    
    $query = "INSERT INTO users (name,email,password) VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$params->username,$params->email,$password]);

    return $stmt->rowCount() ? true : false;
}

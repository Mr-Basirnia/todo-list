<?php defined('PROJECT_PATH') or die();

/**
 * register user
 *
 * @param [type] $params
 * @return boolean
 */
function registerUser($params) : bool
{
    $params = (object) $params;
    $password = password_hash($params->password, PASSWORD_BCRYPT);
    
    global $pdo;
    
    $query = "INSERT INTO users (name,email,password) VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$params->username,$params->email,$password]);

    return $stmt->rowCount() ? true : false;
}

function getUserByEmail($email)
{
    global $pdo;
    
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $row = $stmt->fetch(PDO::FETCH_OBJ);

    return $row ?? null;
}

/**
 * get and check user login info
 *
 * @param [type] $email
 * @param [type] $password
 * @return boolean
 */
function loginUser($email, $password) : bool
{
    $user = getUserByEmail($email);

    if (is_null($user)) {
        return false;
    }

    $user->avatarImg = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($user->email)));

    if (password_verify($password, $user->password)) {
        $_SESSION['loginUser'] = $user;
        return true;
    }

    return false;
}

/**
 * چک میکند که کاربر لاگین کرده است یا خیر
 *
 * @return boolean
 */
function isLogin() : bool
{
    return isset($_SESSION['loginUser']) ? true : false;
}

/**
 * get current login user id
 *
 * @return integer
 */
function getCurrentUserId() : int
{
    return isset($_SESSION['loginUser']) ? $_SESSION['loginUser']->id : 0;
}

/**
 * get login user data
 *
 * @return void
 */
function getLoginUserData()
{
    return $_SESSION['loginUser'] ?? null;
}

/**
 * logout user
 *
 * @return void
 */
function logoutUser()
{
    unset($_SESSION['loginUser']);
}

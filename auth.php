<?php

include_once 'bootstrap/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_GET['action'];
    $params = $_POST;

    if ($action === 'register') {
        $result = registerUser($params);
        if ($result) {
            echo "<div style='color: #fff; background: blueviolet; text-align: center; padding: 10px;'>تبریک میگم با موفقیت ثبت نام شدید</div>";
        }
    } elseif ($action === 'login') {
        $result = loginUser($params['email'], $params['password']);
        if ($result) {
            redirect(siteUrl());
        } else {
            echo "<div style='color: #fff; background: red; text-align: center; padding: 10px;'>اطلاعات وارد شده صحیح نمی باشد</div>";
        }
    }
}

include_once PROJECT_PATH . "views/v-auth.php";

<?php

include "bootstrap/init.php";

if (isset($_GET['logout']) && is_numeric($_GET['logout'])) {
    logoutUser();
}

// اگر کاربر لاگین نکرده باشه به صفحه لاگین منتقل میشه
if (!isLogin()) {
    redirect(siteUrl('auth.php'));
}

$user = getLoginUserData();
$folders = getFolders();

include "views/v-index.php";

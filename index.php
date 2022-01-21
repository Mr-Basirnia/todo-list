<?php

include "bootstrap/init.php";

// اگر کاربر لاگین نکرده باشه به صفحه لاگین منتقل میشه
if (!isLogin()) {
    redirect(siteUrl('auth.php'));
}

include "views/v-index.php";

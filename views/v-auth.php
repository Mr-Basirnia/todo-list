<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>Kaito</title>



    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

    <link rel="stylesheet" href="assets/css/auth.css">


</head>
<link rel="stylesheet" href="css/style.css">
<ul class="lightrope">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>

<body>

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab">ورود</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">ساختن اکانت</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form
                        action="<?= siteUrl('auth.php?action=login') ?>"
                        method="post">
                        <div class="group">
                            <label for="user" class="label">ایمیل</label>
                            <input id="user" type="text" class="input" name="email">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">پسورد</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </form>
                </div>
                <div class="sign-up-htm">
                    <form
                        action="<?= siteUrl('auth.php?action=register') ?>"
                        method="post">
                        <div class="group">
                            <label for="user" class="label">نام کاربری</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">پسورد</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">آدرس ایمیل</label>
                            <input id="pass" type="text" class="input" name="email">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="ساخت اکانت">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Glassmorphism Creative Cloud App Redesign</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="video-bg">
        <video width="320" height="240" autoplay loop muted>
            <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="dark-light">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
        </svg>
    </div>
    <div class="app">
        <div class="header">
            <!-- <div class="menu-circle"></div> -->
            <!-- <div class="header-menu">
                <a class="menu-link is-active" href="#">Apps</a>
                <a class="menu-link notify" href="#">Your work</a>
                <a class="menu-link" href="#">Discover</a>
                <a class="menu-link notify" href="#">Market</a>
            </div> -->
            <div class="search-bar">
                <input type="text" placeholder="اضافه کردن پوشه جدید" id="addNewFolder">
            </div>
            <div class="header-profile">
                <div class="notification">
                    <span class="notification-number">3</span>
                    <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                    </svg>
                </div>
                <a href="<?= siteUrl('?logout=1') ?>"
                    onclick="return confirm('آیا میخواهید از اکانت خود خارج شوید؟')"
                    style="margin-right: 20px; font-size: 26px;">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <img class="profile-img"
                    src="<?= $user->avatarImg ?? '' ?>"
                    alt="">
            </div>
        </div>
        <div class="wrapper">
            <div class="left-side">


                <div class="side-wrapper">
                    <div class="side-title">پوشه ها</div>
                    <div class="side-menu">
                        <a href="<?= siteUrl() ?>">
                            <i class="fas fa-folder-open"></i>
                            همه تسک ها
                        </a>
                        <?php foreach ($folders as $folder) : ?>
                        <div style="display: inline-flex;">
                            <a
                                href="<?= siteUrl("?folder_id={$folder->id}") ?>">
                                <i class="fas fa-folder"></i>
                                <?= $folder->name; ?>
                            </a>
                            <a href="<?= siteUrl("?delete_folder={$folder->id}") ?>"
                                onclick="return confirm('مطمئن هستید میخواهید فولدر را حذف کنید ؟')"
                                style="margin-right: auto;"><i class="fas fa-trash" style="margin: 0;"></i></a>
                        </div>
                        <?php endforeach; ?>
                        <a href="#">
                            <svg viewBox="0 0 512 512" fill="currentColor">
                                <path
                                    d="M352 0H64C28.704 0 0 28.704 0 64v320a16.02 16.02 0 009.216 14.496A16.232 16.232 0 0016 400c3.68 0 7.328-1.248 10.24-3.712L117.792 320H352c35.296 0 64-28.704 64-64V64c0-35.296-28.704-64-64-64z" />
                                <path
                                    d="M464 128h-16v128c0 52.928-43.072 96-96 96H129.376L128 353.152V400c0 26.464 21.536 48 48 48h234.368l75.616 60.512A16.158 16.158 0 00496 512c2.336 0 4.704-.544 6.944-1.6A15.968 15.968 0 00512 496V176c0-26.464-21.536-48-48-48z" />
                            </svg>
                            فولدر دو
                            <span class="notification-number updates">3</span>
                        </a>
                    </div>
                </div>



            </div>
            <div class="main-container">
                <div class="main-header">
                    <a class="menu-link-main" href="#">تسک ها</a>
                    <div class="header-menu">
                        <a class="main-header-link is-active" href="#">جدید ترین</a>
                        <a class="main-header-link" href="#">همه تسک ها</a>
                        <a class="main-header-link" href="#">تایید نشده</a>

                    </div>
                </div>
                <div class="content-wrapper">
                    <div class="content-wrapper-header">
                        <div class="content-wrapper-context">
                            <h3 class="img-content">
                                <svg viewBox="0 0 512 512">
                                    <path
                                        d="M467 0H45C20.099 0 0 20.099 0 45v422c0 24.901 20.099 45 45 45h422c24.901 0 45-20.099 45-45V45c0-24.901-20.099-45-45-45z"
                                        fill="#d6355b" data-original="#ff468c" />
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M512 45v422c0 24.901-20.099 45-45 45H256V0h211c24.901 0 45 20.099 45 45z"
                                        fill="#d6355b" data-original="#d72878" />
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M467 30H45c-8.401 0-15 6.599-15 15v422c0 8.401 6.599 15 15 15h422c8.401 0 15-6.599 15-15V45c0-8.401-6.599-15-15-15z"
                                        fill="#2e000a" data-original="#700029" />
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M482 45v422c0 8.401-6.599 15-15 15H256V30h211c8.401 0 15 6.599 15 15z"
                                        fill="#2e000a" data-original="#4d0e06" />
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M181 391c-41.353 0-75-33.647-75-75 0-8.291 6.709-15 15-15s15 6.709 15 15c0 24.814 20.186 45 45 45s45-20.186 45-45-20.186-45-45-45c-41.353 0-75-33.647-75-75s33.647-75 75-75 75 33.647 75 75c0 8.291-6.709 15-15 15s-15-6.709-15-15c0-24.814-20.186-45-45-45s-45 20.186-45 45 20.186 45 45 45c41.353 0 75 33.647 75 75s-33.647 75-75 75z"
                                        fill="#d6355b" data-original="#ff468c" />
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="M391 361h-30c-8.276 0-15-6.724-15-15V211h45c8.291 0 15-6.709 15-15s-6.709-15-15-15h-45v-45c0-8.291-6.709-15-15-15s-15 6.709-15 15v45h-15c-8.291 0-15 6.709-15 15s6.709 15 15 15h15v135c0 24.814 20.186 45 45 45h30c8.291 0 15-6.709 15-15s-6.709-15-15-15z"
                                        fill="#d6355b" data-original="#d72878" />
                                </svg>
                                Adobe Stock
                            </h3>
                            <div class="content-text">Grab yourself 10 free images from Adobe Stock in a 30-day free
                                trial plan and find perfect image, that will help you with your new project.</div>
                            <button class="content-button">Start free trial</button>
                        </div>
                        <img class="content-wrapper-img" src="https://assets.codepen.io/3364143/glass.png" alt="">
                    </div>
                    <div class="content-section">
                        <!-- <div class="content-section-title">Installed</div> -->
                        <ul>
                            <?php if (sizeof($tasks)): ?>
                            <?php foreach ($tasks as $task): ?>
                            <li class="adobe-product">
                                <div class="products">
                                    <span style="margin-left: 10px;">نام تسک : </span>
                                    <?= $task->title ?>
                                </div>
                                <span class="status">
                                    <span>تاریخ ساخت : </span>
                                    <?= $task->created_at ?>
                                </span>
                                <div class="button-wrapper">

                                    <span>وضعیت : </span>
                                    <span
                                        class="<?= $task->is_done ? 'status-circle green' : 'status-circle' ?>"></span>

                                    <div class="menu">
                                        <button class="dropdown">
                                            <ul>
                                                <li><a href="#">ویرایش</a></li>
                                                <li><a
                                                        href="<?= siteUrl("?delete_folder=$task->id") ?>">پاک
                                                        کردن</a></li>
                                            </ul>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <li class="adobe-product">

                                <span class="status">هیچ تسکی وجود ندارد</span>

                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="content-section">
                        <div class="content-section-title">Apps in your plan</div>
                        <div class="apps-card">
                            <div class="app-card">
                                <span>
                                    <svg viewBox="0 0 512 512" style="border: 1px solid #a059a9">
                                        <path xmlns="http://www.w3.org/2000/svg"
                                            d="M480 0H32C14.368 0 0 14.368 0 32v448c0 17.664 14.368 32 32 32h448c17.664 0 32-14.336 32-32V32c0-17.632-14.336-32-32-32z"
                                            fill="#210027" data-original="#7b1fa2" />
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M192 64h-80c-8.832 0-16 7.168-16 16v352c0 8.832 7.168 16 16 16s16-7.168 16-16V256h64c52.928 0 96-43.072 96-96s-43.072-96-96-96zm0 160h-64V96h64c35.296 0 64 28.704 64 64s-28.704 64-64 64zM400 256h-32c-18.08 0-34.592 6.24-48 16.384V272c0-8.864-7.168-16-16-16s-16 7.136-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16v-96c0-26.464 21.536-48 48-48h32c8.832 0 16-7.168 16-16s-7.168-16-16-16z"
                                                fill="#f6e7fa" data-original="#e1bee7" />
                                        </g>
                                    </svg>
                                    Premiere Pro
                                </span>
                                <div class="app-card__subtext">Edit, master and create fully proffesional videos</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Update</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                            <div class="app-card">
                                <span>
                                    <svg viewBox="0 0 52 52" style="border: 1px solid #c1316d">
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                fill="#2f0015" data-original="#6f2b41" />
                                            <path
                                                d="M18.08 39H15.2V13.72l-2.64-.08V11h5.52v28zM27.68 19.4c1.173-.507 2.593-.761 4.26-.761s3.073.374 4.22 1.12V11h2.88v28c-2.293.32-4.414.48-6.36.48-1.947 0-3.707-.4-5.28-1.2-2.08-1.066-3.12-2.92-3.12-5.561v-7.56c0-2.799 1.133-4.719 3.4-5.759zm8.48 3.12c-1.387-.746-2.907-1.119-4.56-1.119-1.574 0-2.714.406-3.42 1.22-.707.813-1.06 1.847-1.06 3.1v7.12c0 1.227.44 2.188 1.32 2.88.96.719 2.146 1.079 3.56 1.079 1.413 0 2.8-.106 4.16-.319V22.52z"
                                                fill="#e1c1cf" data-original="#ff70bd" />
                                        </g>
                                    </svg>
                                    InDesign
                                </span>
                                <div class="app-card__subtext">Design and publish great projects & mockups</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Update</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                            <div class="app-card">
                                <span>
                                    <svg viewBox="0 0 52 52" style="border: 1px solid #C75DEB">
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                fill="#3a3375" data-original="#3a3375" />
                                            <path
                                                d="M27.44 39H24.2l-2.76-9.04h-8.32L10.48 39H7.36l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L13.88 27h6.84zM31.48 33.48c0 2.267 1.333 3.399 4 3.399 1.653 0 3.466-.546 5.44-1.64L42 37.6c-2.054 1.254-4.2 1.881-6.44 1.881-4.64 0-6.96-1.946-6.96-5.841v-8.2c0-2.16.673-3.841 2.02-5.04 1.346-1.2 3.126-1.801 5.34-1.801s3.94.594 5.18 1.78c1.24 1.187 1.86 2.834 1.86 4.94V30.8l-11.52.6v2.08zm8.6-5.24v-3.08c0-1.413-.44-2.42-1.32-3.021-.88-.6-1.907-.899-3.08-.899-1.174 0-2.167.359-2.98 1.08-.814.72-1.22 1.773-1.22 3.16v3.199l8.6-.439z"
                                                fill="#e4d1eb" data-original="#e7adfb" />
                                        </g>
                                    </svg>
                                    After Effects
                                </span>
                                <div class="app-card__subtext">Industry Standart motion graphics & visual effects</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Update</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-app"></div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#addNewFolder").on('keypress', function(e) {

                var inputValue = $('#addNewFolder').val();

                if (e.which == 13) {
                    $.ajax({
                        url: 'process/ajaxHandler.php',
                        method: 'post',
                        data: {
                            action: 'addNewFolder',
                            folderName: inputValue
                        },
                        success: function(response) {

                            var result = jQuery.parseJSON(response);

                            var folderId = result.result;

                            if (result.success) {
                                $('<div style="display: inline-flex;"> <a href="?folder_id=' +
                                    folderId +
                                    '"> <i class="fas fa-folder"></i> ' +
                                    inputValue +
                                    ' </a> <a href="?delete_folder=' + folderId +
                                    '" style="margin-right: auto;"><i class="fas fa-trash" style="margin: 0;"></i></a> </div>'
                                ).appendTo('.side-menu')
                            }

                        }
                    })
                }

            });

        })
    </script>

</body>

</html>
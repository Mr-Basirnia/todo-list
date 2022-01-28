<?php defined('PROJECT_PATH') or die(); ?>
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

                    <div class="header">
                        <div class="taskbar-add">
                            <input type="text" placeholder="اضافه کردن تسک جدید" id="addNewTask">
                        </div>
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
                                        class="<?= $task->is_done ? 'status-circle green' : 'status-circle' ?> task_status"
                                        data-taskId="<?= $task->id ?>"></span>

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

            $('.task_status').click(function(e) {
                var taskId = $(this).attr('data-taskId');
                $.ajax({
                    url: 'process/ajaxHandler.php',
                    method: 'post',
                    data: {
                        action: 'changeTaskStatus',
                        taskId: taskId
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });

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

            $("#addNewTask").on('keypress', function(e) {
                e.stopPropagation();

                if (e.which == 13) {
                    $.ajax({
                        url: "process/ajaxHandler.php",
                        method: "post",
                        data: {
                            action: 'addTask',
                            taskName: $('#addNewTask').val(),
                            folderId: <?= $_GET['folder_id'] ?? 0 ?>
                        },
                        success: function(response) {
                            if (response == '1') {
                                location.reload();
                            } else {
                                alert(response);
                            }
                        }
                    })
                }

            });

        })
    </script>

</body>

</html>
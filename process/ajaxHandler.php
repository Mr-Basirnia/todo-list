<?php include "../bootstrap/init.php";


if (!isAjaxRequest()) {
    showMsgAndDie('درخواست ایجکس نیست');
}

if (!isset($_POST['action']) || empty($_POST['action'])) {
    showMsgAndDie('اکشن صفحه نامعتبر است');
}


switch ($_POST['action']) {

    case 'changeTaskStatus':
        $taskId = $_POST['taskId'];
        if (!isset($taskId) || !is_numeric($taskId)) {
            echo "آیدی تسک نادرست می باشد";
            die();
        }
        changeTaskStatus($taskId);
        break;

    case 'addNewFolder':
        if (!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3) {
            echo "اسم پوشه باید بزرگتر از 2 کلمه باشد";
            die();
        }
        $result = addFolder($_POST['folderName']);
        if (is_array($result)) {
            echo json_encode($result);
        }
        break;

    case 'addTask':

        $task_name = $_POST['taskName'];
        $folder_id = $_POST['folderId'];

        if (!isset($folder_id) || empty($folder_id)) {
            echo "برای افزودن تسک یک پوشه را انتخاب کنید";
            die();
        }
        if (!isset($task_name) || strlen($task_name) < 3) {
            echo "اسم تسک باید بزرگتر از 2 کلمه باشد";
            die();
        }
        echo addNewTask($task_name, $folder_id);
        break;
    
    default:
        
        break;
}

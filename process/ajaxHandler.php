<?php include "../bootstrap/init.php";


if (!isAjaxRequest()) {
    showMsgAndDie('درخواست ایجکس نیست');
}

if (!isset($_POST['action']) || empty($_POST['action'])) {
    showMsgAndDie('اکشن صفحه نامعتبر است');
}


switch ($_POST['action']) {
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
    
    default:
        
        break;
}

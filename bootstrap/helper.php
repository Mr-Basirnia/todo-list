<?php

function showMsgAndDie($msg)
{
    echo "<pre style='background: #E57373; padding: 30px; border-radius: 15px; color: #fff; border: 5px solid #D50000;'>";
    print_r("<span>$msg</span>");
    echo "</pre>";
    die();
}

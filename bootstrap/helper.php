<?php

/**
 * show message and die page
 *
 * @param [type] $msg
 * @return void
 */
function showMsgAndDie($msg)
{
    echo "<pre style='background: #E57373; padding: 30px; border-radius: 15px; color: #fff; border: 5px solid #D50000;'>";
    print_r($msg);
    echo "</pre>";
    die();
}

/**
 * site url + url
 *
 * @param string $url
 * @return string
 */
function siteUrl(string $url) : string
{
    return PROJECT_URL . $url;
}

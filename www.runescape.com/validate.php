<?php


require_once("global.php");

if (isset($_GET['username'])) {
    $user = str_replace(' ', '_', strtolower(trim($_GET['username'])));

    if(strlen($user) < 1 || !preg_match("/^([a-z0-9_])+$/", $user)) {
        echo  1;
        die;
    }

    $query = dbquery("SELECT UID FROM users WHERE username='$user' LIMIT 1;");

    if(mysql_num_rows($query) < 1) {
        echo 17;
        die;
    }
    else {
        echo  0;
        die;
    }
} else if (isset($_GET['email'])) {
    if ($_GET['email'] != "" && !preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $_GET['email'])) {
        echo  json_encode(array('code'  =>  0,
        'result'  =>  "<b>Invalid email address.</b>"
        ));
        die;
    } else {
        echo  json_encode(array('code'  =>  1,
        'result'  =>  "&nbsp;"
        ));
        die;
    }
}
die;
?>

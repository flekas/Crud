<?php


if(isset($_POST['switch_table']))
{
    $referrer = $_GET['referrer'];
    session_start();
    $_SESSION['SESSION_TABLE_NAME'] = $_POST['table_name'];
    header("location:" . $referrer . "");
}


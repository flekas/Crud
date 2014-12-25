<?php

if(isset($_POST['edit_values']))
{
    include_once 'session.php';
    include_once 'core/manage.php';
    $param = $_POST;
    
    $init = new Manage;
    $id = $_GET['id'];

    
    $edit_values =  $init->editData($session_table_name  , $param , $id);
    header("location:edit.php?id=". $id ."");
}


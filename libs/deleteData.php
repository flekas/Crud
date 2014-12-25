<?php
if(isset($_GET['delete']))
{
    include_once 'core/manage.php';
    $init  = new Manage;
    $id = $_GET['id'];
    
    $delete = $init->deleteData($session_table_name , $id);
    
    if($delete == 1)
    {
        $success = 'Data deleted successfully ';
    }
    else
    {
        $error = 'There was a problem';
    }
    
}


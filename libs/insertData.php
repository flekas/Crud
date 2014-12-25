<?php

if(isset($_POST['insert_values']))
{
    $param = $_POST;
    include_once  'core/manage.php';
    $init = new Manage;
    
    foreach ( $param as $key => $value )
    {
        if($key !== 'insert_values')
        {
            $fields_name[]   = $key;
            $fields_values[] = $value;
        }
    }
    
    $field_count = count($fields_name);
    $fields_name = implode(',', $fields_name);
    
    for($x = 1; $x <= $field_count; $x++)
    {
        $total_counts[] = '?';
    }
    $bind_param = implode(',', $total_counts);
    $insert = $init->insertData( $session_table_name ,$fields_name,$bind_param,$fields_values);
    
    if( $insert == 1 )
    {
        $success = "Data aded successfully";
    }
    else
    {
        $error = "There was a problem..!";
    }
}

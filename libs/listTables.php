<?php
include_once  'core/manage.php';
include_once  'session.php';
$tables_init = new Manage;

$listed_tables = $tables_init->listTables();
foreach ( $listed_tables as $key => $value )
{
    $given_tables[] = $value['Tables_in_crud'];
}

$selected_tables = array( $session_table_name );
$tables_left     = array_diff( $given_tables, $selected_tables );

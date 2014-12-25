<?php
include_once 'core/manage.php';
$init = new Manage;
$table_fields = $init->listFields($session_table_name );


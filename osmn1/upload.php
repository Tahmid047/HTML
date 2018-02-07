<?php
require_once 'dbconfig.php';
$query=mysql_query("INSERT INTO $tbl_name(Name,Phone)
values('$_POST[Name]','$_POST[Phone]')",$connection);
?>
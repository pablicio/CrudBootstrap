<?php
$con = mysql_connect("localhost", "root", "123") or die(mysql_error());
$db = mysql_select_db("db_pablicio", $con) or die(mysql_error());


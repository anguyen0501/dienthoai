<?php
	$link=mysql_connect("localhost","root","") or die("Cannot connect to the localhost");
	mysql_select_db("dienthoai",$link) or die("Cannot connect to the database");
	mysql_query("SET NAMES 'UTF8'");
?>

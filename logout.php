<?php
 session_start(); 
	if(isset($_SESSION['kh_login'])){
		unset($_SESSION['kh_login']);
		header('location:index.php');
	}
?>
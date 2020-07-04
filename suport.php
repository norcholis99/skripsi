<?php 
session_start();
if (!isset($_SESSION['email'])){
	header("location:01_login.php");
} ?>

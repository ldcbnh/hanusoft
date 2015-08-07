<?php
session_start();
include 'db/db_connect.php';
if (isset($_SESSION['login'])) {
	if (isset($_SESSION['admin'])) {
		echo "admin";
	} else {

	}
} else {
	header("location: login.php");
}
?>

<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['user_id']);
session_destroy();
	header("Location:../login-mahasiswa.php");
?>
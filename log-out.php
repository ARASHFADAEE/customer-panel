<?php


require_once './config/loader.php';

unset($_SESSION['login']);

// حذف کامل session
session_destroy();

header('location:./login.php');

<?php


include_once 'database.php';
include_once "sms-panel.php";
include_once "Auth.php";
$auth=new auth();
session_start();
$auth->is_login();
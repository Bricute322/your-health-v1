<?php

session_start();
include ('ChatSystem/Chat.php');
$chat = new Chat();
$chat->updateUserOnline($_SESSION['userid'], 0);
$_SESSION['username'] = "";
$_SESSION['userid']  = "";
$_SESSION['login_details_id']= "";
session_destroy();
header("Location:index.php");
?>
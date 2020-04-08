<?php 
session_start();
session_destroy();//刪除所有session變數

header('Location:login.php');

?>
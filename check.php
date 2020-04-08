<?php  
ob_start();//session存不起來，程式跑完才送
session_start();
$lid=$_POST["lid"];
$pwd=$_POST["pwd"];

$uid="derrick";
$upwd="12345678";

if ($lid==$uid && $pwd==$upwd) {
	//echo "login success";
	$_SESSION["login"]="S";
	$_SESSION["loginID"]=$lid;
	header('Location:success.php');//登入成功後顯示的畫面
}

else{
	//echo "login failed, back to login page in 3 seconds";
	//echo "<meta http-eqiv='refresh'
	//	content='3;url=login.php'/>";
	$_SESSION["login"]="F";
	header('Location:fail.php');
}








?>

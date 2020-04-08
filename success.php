<?php
session_start();
if(isset($_SESSION["login"])){
    echo "恭喜您登入成功<br/>";
    $date  = strtotime("+7 days",time());//cookie7天後自動刪除

    setcookie("loginID",$_SESSION["loginID"],$date);
	header("Location:catalog.php");
    echo "<a href='logout.php'>登出系統</a>";

}
else{
    echo "非法進入<br/>";
    echo "<a href='login.php'>乖乖回首頁</a>";
}

?>


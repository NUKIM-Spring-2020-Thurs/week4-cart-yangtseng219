<html>
<head>
<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
		*{
			font-family:  'Noto Sans TC', sans-serif;
			/* background-color: #34495e; */
		}


</style>
</head>
<h2>Log me in</h2>

<?php
if(isset($_COOKIE["loginID"])){
    $user=$_COOKIE["loginID"];
    echo "歡迎再度光臨".$_COOKIE["loginID"];
    setcookie("loginID","",time()-3600);
}
else{
    echo "歡迎新朋友";
    $user="";
}

?>

<form action="check.php" method="post">
Please input your ID:
<input type="text" name="lid" value="<?php echo $_COOKIE["loginID"] ?>" required><br/>
Please input your password:
<input type="password" name="pwd" required><br/>
<input type="submit" >
</form>
</html>


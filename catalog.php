<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>商品目錄</title>
<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
		*{
			font-family:  'Noto Sans TC', sans-serif;
			/* background-color: #34495e; */
		}
        form{
            /* background-color: #34495e; */
        }
        h3{
            font-size: 2rem;
            height: 2rem;
            display: inline-block;

        }
        footer{
            margin-top: 50px;
        }


</style>
<?php
session_start();  // 啟用交談期
// 檢查是否是表單送回
if ( isset($_POST["Item"]) ) {
   // 取得購買的數量
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  // 取得選擇商品
   $_SESSION["ID"] = $id; // 建立Session變數
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"]="小米9TPro";
			$_SESSION["Price"]=12999;
         break;
      case "S002":
         $_SESSION["Name"]="小米9T";
			$_SESSION["Price"]=8999;
         break;
      case "S003":
         $_SESSION["Name"]="紅米RedmiNote7";
			$_SESSION["Price"]=5499;
         break;   
   }  
   header("Location: addcart.php");  // 轉址
}
?>
</head>
<body>
<form action="catalog.php" method="post">
<h3>商品目錄</h3><br/>
<select name="Item">
  <option value="S001">小米9T Pro NT$12999</option>
  <option value="S002">小米9T NT$8999</option>
  <option value="S003">紅米Redmi Note7 NT$5499</option> 
</select>
<input type="text" size="3" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<footer>
    <a href="catalog.php">商品目錄</a> |
    <a href="cart.php">檢視購物車</a> |
    <a href="logout.php">登出系統</a>
</footer>
</body>
</html>
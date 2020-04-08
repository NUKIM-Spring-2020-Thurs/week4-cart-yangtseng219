<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>購物車</title>
<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
		*{
			font-family:  'Noto Sans TC', sans-serif;
			/* background-color: #34495e; */
		}


</style>
</head>
<body>
<table border="0">
  <tr>
   <td>功能</td><td>編號</td><td>名稱</td>
   <td>價格</td><td>數量</td></tr>
<?php
$flag = false;  $total = 0;
// 取出所有陣列Cookie
while ( list($arr, $value) = each($_COOKIE) ) {
  // 檢查COOKIE名稱是否存在，且為陣列
  if ( isset($_COOKIE[$arr]) && 
                   is_array($_COOKIE[$arr]) ) {
     if ($flag) {   // 切換顯示色彩
        $flag = false;
        $color="#00aa99";
     } else {
        $flag = true;
        $color="#99ffff";
     }
     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $price = 0;
     $quantity = 0; // 顯示選購的商品資料
     while ( list($name, $value)=each($_COOKIE[$arr])) {
        // 使用表格顯示
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;  // 計算總金額
     echo "</tr>";
  }
}
if ($total != 0) {  // 顯示總金額
   echo "<tr bgcolor=#aaa><td colspan=5 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
   <a href="catalog.php">商品目錄</a> | 
   <a href="cart.php">檢視購物車</a> |
   <a href="logout.php">登出系統</a>
</body>
</html>
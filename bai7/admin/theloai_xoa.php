<?php
include("../connect.php");
if(isset($_GET["IdTL"]))
{
	$key=$_GET["IdTL"];

}
	$sl="delete from theloai where IdTL=".$_GET["IdTL"];
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='theloai.php';</script>";
}


?>

<?php //ob_start();
	include_once('../connect.php');
		// upload hinh anh	
	$icon=$_FILES['image']['name'];
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"image/".$icon);

	$theloai = $_POST['TenTL'];
	//$theloai = filter_input(INPUT_GET, 'TenTL', FILTER_VALIDATE_INT);
	//$thutu = filter_input(INPUT_GET, 'ThuTu', FILTER_VALIDATE_INT);
	$thutu = $_POST['ThuTu'];
	$an = $_POST['AnHien'];
	
	$sl = "insert into theloai (TenTL,ThuTu,AnHien,icon) Value('$theloai','$thutu','$an','$icon')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='theloai.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
//mysqli_close($link);
	echo "<script language='javascript'>alert('Them thanh cong');";
echo "location.href='theloai.php';</script>";


?>

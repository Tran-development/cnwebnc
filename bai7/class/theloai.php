<?php 
 include 'config.php';
 include 'class/class.db.theloai.php';
 $db_theloai = new db_TheLoai();
 $theloai_arr = $db_theloai->get_theloai();
 $theloai_html = "";
 if (count($theloai_arr) == 0) {
 	$theloai_html = 'Khong co the loai
 	 <a href="theloai_them.php">THEM THE LOAI</a>';
 }
 else{
 	$theloai_html = 
 }
 ?>
<h1>Quan tri the loai</h1>
<table width="100%" id="bang_quantri" cellpadding="10" cellspacing="0">
	<tr>
		<th>Tên thể loại</th><th>Thứ tự</th>
	</tr>
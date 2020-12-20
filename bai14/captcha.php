<?php
session_start();
$string = md5(time());
$string = substr($string, 0, 6);

$_SESSION['captcha'] = $string;

$img = imagecreate(150,50);
$background = imagecolorallocate($img, 99,25,25);
$text_color = imagecolorallocate($img, 255,255,255);
imagestring($img, 4,40,15, $string, $text_color);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<img src="captcha.php" title="" alt="" />
	</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){
	$input = $_POST['input'];
	if($input == $_SESSION['captcha'])
		$_SESSION['message'] = "* Right captcha !!!";
	else{
		$_SESSION['message'] = "* Wrong captcha !!!";
	}
}
?>

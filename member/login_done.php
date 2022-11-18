<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';

$is_logged = $_SESSION['is_logged'];
if ($is_logged == 'YES') {
	$message = '로그인 되었습니다.';
}
else {
	$message = '로그인이 실패했습니다';
}

// var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>로그인 완료 페이지</title>
</head>
<body>
	로그인 완료 페이지 <br />
	<hr />
	<?php
	echo $message;
	?>
	<hr />
	<a href = "../index.php"> 첫 페이지로 </a>
</body>
</html>


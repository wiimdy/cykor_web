<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>로그인 페이지</title>
</head>
<body>
	로그인 페이지 <br />
	<hr />

	<form name="login_form" method="post" action="./login_check.php">
		아이디 : <input type="text" name="user_id" /><br />
		비밀번호: <input type="password" name="user_pass" /><br />
		<input type="submit" value="로그인" />
	</form>
</body>
</html>

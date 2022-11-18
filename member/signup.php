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
	<title>회원 가입 페이지</title>
</head>
<body>
	signup.php - 회원가입 페이지 <br />
	<hr />

	<form name="signup_form" method="post" action="./signup_check.php">
		아이디 : <input type="text" name="user_id" /> <br />
		비밀번호 : <input type="password" name="user_pass" /> <br />
		<!-- 비밀번호 확인 : <input type="password" name="user_pass2" /> <br /> -->
		이메일 주소 : <input type="text" name="user_email" /> <br />
		<input type="submit" value="회원가입" /> <br />
	</form>
</body>
</html>

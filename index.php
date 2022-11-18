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
	<title>Home</title>
</head>
<body>
	<h1>It is wiimdy cykor web....</h1>
	<img src="./img/images.jpeg">
	<hr />
	<a href="./bbs/write.php" class="btn">Write </a>
	<a href="./bbs/list.php" class="btn">Article list </a>
	<a href="./member/signup.php" class="btn">Sign up</a>
	<a href="./member/login.php" class="button-orange-small">Login</a>
</body>
</html>

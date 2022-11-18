<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="http://<?php echo $_SERVER['HTTP_HOST'];?>/main.css" rel="stylesheet">

	<title>기본 틀</title>
</head>
<body>
	<div class="header">
		<a href="http://<?php echo $_SERVER['HTTP_HOST'];?>" Home </a> <a href = "http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/write.php">
	글쓰기
	</a> </br>
	State:
	<?php if($_SESSION['is_logged'] == 'YES'){
		echo '로그인 되었습니다.';
		echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/member/logout.php">로그아웃</a>';
	}
	?>
	</div>
	<!-- header -->
	<div class="content">

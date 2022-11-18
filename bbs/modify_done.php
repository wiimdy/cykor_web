<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';

$modify_status = $_SESSION['modify_status'];

if ($modify_status == 'YES') {
	$message = '글이 저장되었습니다.';
}
else {
	$message = '저장에 실패했습니다.';
}
?>

게시판 글 수정 페이지 <br />
<hr />

<?php
echo $message;
?>
<br />
	<a href = "../index.php"> HOME </a>
	&emsp;
	<a href = "./list.php">   List </a>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';

$writing_status = $_SESSION['writing_status'];

if ($writing_status == 'YES') {
	$message = '글이 저장되었습니다.';
}
else {
	$message = '저장에 실패했습니다.';
}
?>

게시판 글 저장 페이지 <br />
<hr />

<?php
echo $message;
?>
<br />
	<a href = "../index.php"> 첫 페이지로 </a>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>

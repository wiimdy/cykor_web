<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';

$delete_status = $_SESSION['delete_status'];

if ($delete_status == 'YES') {
	$message = '글이 삭제되었습니다.';
}
else {
	$message = '삭제에 실패했습니다.';
}
?>

게시판 글 삭제 페이지 <br />
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

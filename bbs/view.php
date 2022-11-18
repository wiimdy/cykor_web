<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<?php
$q = "SELECT * FROM ap_bbs WHERE doc_idx = $doc_idx";
$result = $mysqli->query($q);
$data = $result->fetch_array();
if ($_SESSION['user_id'] == $data['member_idx']) {
	echo '<a href = "http://'.$_SERVER['HTTP_HOST'].'/bbs/modify.php?doc_idx='.$doc_idx.'">글 수정 </a>' ;
}
echo "&emsp;";
if ($_SESSION['user_id'] == $data['member_idx']) {
	echo '<a href = "http://'.$_SERVER['HTTP_HOST'].'/bbs/delete.php?doc_idx='.$doc_idx.'">글 삭제 </a>';
}
?>
<table>
	<tr>
	<td>
			작성자:
		</td>
		<td>
			<?php echo $data['member_idx'];?>
		</td>

	</tr>
	<td>
			제목:
		</td>
		<td>
			<?php echo $data['subject1'];?>
		</td>
	<tr>

	</tr>
	<tr>
		<td>
			내용:
		</td>
		<td>
			<?php echo $data['content'];?>
		</td>
	</tr>
</table>
<a href = "./list.php"> 목록 </a>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>

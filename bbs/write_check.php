<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

$reg_date = date("Y-m-d h:i:s",strtotime ("+9 hours"));
$member_idx = $_SESSION['user_id'];
$q = mysqli_query($mysqli, "INSERT INTO ap_bbs (member_idx,subject1,content,w_date) VALUES('$member_idx', '$subject', '$content', '$reg_date')");

if ($q) {
	$_SESSION['writing_status'] = 'YES';
}
else {
	$_SESSION['writing_status'] = 'NO';

}
$mysqli->close();

header('Location: '.$url['root']. 'bbs/write_done.php');
exit();
?>

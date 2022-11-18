<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

$q = mysqli_query($mysqli, "UPDATE ap_bbs SET subject1 = '$subject', content='$content' WHERE doc_idx=$doc_idx");

if ($q) {
	$_SESSION['modify_status'] = 'YES';
}
else {
	$_SESSION['modify_status'] = 'NO';

}
$mysqli->close();

header('Location: '.$url['root']. 'bbs/modify_done.php');
exit();
?>

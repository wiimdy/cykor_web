<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<?php
$q = mysqli_query($mysqli, "DELETE FROM ap_bbs WHERE doc_idx = $doc_idx");
if ($q) {
	$_SESSION['delete_status'] = "YES";
}
else {
	$_SESSION['delete_status'] = "NO";
}
$mysqli->close();
header('Location: '.$url['root']. 'bbs/delete_done.php');
exit();
?>

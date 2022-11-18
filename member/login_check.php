<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';

	$q="SELECT * FROM ap_member WHERE id='$user_id'";
	$result=$mysqli->query($q);

	if($result->num_rows==1){
		$encrypted_pass = hash("sha256", $user_pass);
		$row=$result->fetch_array(MYSQLI_ASSOC);
		if ($row['pw'] == $encrypted_pass) {
			$_SESSION['is_logged'] = 'YES';
			$_SESSION['user_id'] = $user_id;
			$_SESSION['member_idx'] = $row['member_idx'];
			header('Location:'.$url['root'].'/member/login_done.php');
			exit();
		}
		else {
			$_SESSION['is_logged'] = 'NO';
			$_SESSION['user_id'] = '';
			header('Location:'.$url['root'].'/member/login_done.php');
			exit();
		}
	}
	else {
		echo 'wrong id or wrong password';
	}
?>

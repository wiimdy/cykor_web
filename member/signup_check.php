<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


extract($_POST);

echo $user_id. '<br />';
echo $user_pass. '<br />';
echo $user_pass2. '<br />';
echo $user_email. '<br />';
$password_hash = hash("sha256", $user_pass);

$q = mysqli_query($mysqli, "INSERT INTO ap_member (id,pw,email) VALUES ('$user_id', '$password_hash', '$user_email')");

$mysqli->close();
header("Location:".$url['root']."/member/signup_done.php");
?>

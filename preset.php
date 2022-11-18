<?php
session_start();

$p=array();
$path['root'] = $_SERVER['DOCUMENT_ROOT'].'/';

require_once($path['root'].'config.php');

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$url = array();
$url['root'] = 'http://'.$_SERVER['HTTP_HOST'].'/';
extract($_POST);
extract($_GET);
?>

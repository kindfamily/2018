<!DOCTYPE html>
<meta charset="utf-8" />
<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_level = $_SESSION['user_level'];

echo "<p>안녕하세요. $user_name($user_id)님</p>";
echo "<p>안녕하세요. 회원님의 등급은 $user_level 입니다</p>";
echo "<p><a href='logout.php'>로그아웃</a></p>";
?>
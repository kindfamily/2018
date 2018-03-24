<?php
// if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$conn = mysqli_connect("localhost", "tuntunkimpo", "wonbong1984", "tuntunkimpo");

$sql = "SELECT * FROM user WHERE m_id='$user_id' and m_pw='$user_pw'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

session_start();
$_SESSION['user_id'] = $row['m_id'];
$_SESSION['user_name'] = $row['m_name'];
$_SESSION['user_type'] = $row['m_type'];


if(!isset($_SESSION['user_id']))
{
        header('Location: ../signin.php');
}

?>
<meta http-equiv='refresh' content='0;url=../../logined.php'>
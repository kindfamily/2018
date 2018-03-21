<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$conn = mysqli_connect(
        'localhost',
        'root',
        'wonbong1984',
        'dongnecom');
      
$sql = "SELECT * FROM user WHERE m_id='$user_id' and m_pw='$user_pw'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

session_start();
$_SESSION['user_id'] = $row['m_id'];
$_SESSION['user_name'] = $row['m_name'];
$_SESSION['user_level'] = $row['m_level'];

if(!isset($_SESSION['user_id']))
{
        header('Location: signin.php');
}

?>
<meta http-equiv='refresh' content='0;url=main.php'>
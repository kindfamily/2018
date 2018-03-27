<?php

if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
if(!isset($_POST['user_name']) || !isset($_POST['user_type'])) exit;

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$user_name = $_POST['user_name'];
$user_type = $_POST['user_type'];

echo $user_id;
echo $user_pw;
echo $user_name;

$conn = mysqli_connect("localhost", "root", "wonbong1984", "dongnecom");

$sql = "INSERT INTO user(m_id, m_pw, m_name, m_type) VALUES('$user_id', '$user_pw', '$user_name', '$user_type')";

var_dump($sql);

$result = mysqli_query($conn, $sql);

if($result === false){
        echo mysqli_error($conn);
}
?>
<meta http-equiv='refresh' content='0;url=main.php'>
<?php  
require_once('conn.php');

$btn=array(
	'log'=>'로그인'
  );

$log_link="login.html";
$play_link="login.html";
$home_link="login.html";
$logo_link="main.php";

$escaped_name='';
$filtered_user_id='';
$loginchk='return loginchk()';
if(isset($_GET['id'])){
	$filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
	$btn['log']="로그아웃";
	$log_link="#";
    $play_link="play.php?id={$filtered_user_id}";
    $home_link="home.php?id={$filtered_user_id}";
	$logo_link="main.php?id={$filtered_user_id}";
	$loginchk='';

	$sql="select name from sign where user_id='{$filtered_user_id}'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	print_r(mysqli_error($conn));
	$escaped_name=htmlspecialchars($row['name']);
	$escaped_name=$escaped_name."님";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
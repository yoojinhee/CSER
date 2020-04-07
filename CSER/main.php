<?php  
require_once('conn.php');

$btn=array(
	'log'=>'로그인'
  );

$log_link="login.html";
$play_link="login.html";
$home_link="login.html";
$escaped_name='';
$filtered_user_id='';

if(isset($_POST['user_id'])){
	$filtered_user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
	$btn['log']="로그아웃";
	$log_link="#";
    $play_link="play.php";
    $home_link="home.php";
	$sql="select name from sign where user_id='{$filtered_user_id}'";
	// $sql="select name from sign where user_id='{$_POST['user_id']}'";
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
	<title>냉장고나라</title>
	<style>
		#title{			
			text-align: center;
			padding-top: 50px;
			padding-bottom: 20px;
			font-size: 50px;
		}
		#name{
			float:right;
			margin:10px;
		}
		#menu{
			border:1px solid red;
			text-align: center;
			padding:10px;
		}
		#log{
			float:right;
			margin:10px;
		}
		#play,#home{
			margin:20px;
			font-size: 25px;
		}
		
		header{
			border:1px solid gray;
		}
		a{
			text-align:center;
			text-decoration: none;
		}
		body{
			margin:0px;
		}
	</style>
</head>

<body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<header>			
		<span><a href="<?=$log_link?>" id="log" onclick="return logoutchk();"><?=$btn['log']?></a></span>
		<script>
			function logoutchk(){
	  			value=document.getElementById("log").innerText;
	  			if(value==="로그아웃"){
	  				if(confirm("로그아웃하시겠습니까?")){
	        			location.href = "main.php";
	        			return true;
				    } else {
				        return false;
				    }
	  			}
			}//로그아웃 체크
			
		</script>	
		<span><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a></span>
		<div id="title"><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'">냉장고나라</a></div>
	</header>	
	<nav id='menu'>
		<form method="post" name="form" action="<?=$play_link?>" style="display: inline">
    		<input type="hidden" name="user_id" id="menu_hidden" value='<?=$filtered_user_id?>'>
    		<span><a href="<?=$play_link?>" onclick="logchk()" id="play">놀이학습</a></span>
    	</form>
    	<form method="post" name="form" action="<?=$home_link?>" style="display: inline">
    		<input type="hidden" name="user_id" id="menu_hidden" value='<?=$filtered_user_id?>'>
    		<span><a href="<?=$home_link?>" onclick="logchk()" id="home">마이홈</a></span>
    	</form>			
    		<script>
    			function logchk(){
    				value=document.getElementById('menu_hidden').value;

    				if(!empty(value)){
    					document.form.submit();
    				}
    			}
    			// 메뉴를 클릭했을때 로그인을 했는지 안했는지 체크하고 경로 지정
    		</script>
  		</form>
	</nav>	
</body>
</html>
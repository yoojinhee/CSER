
<body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/index.js"></script>	
	<header>			
		<span><a href="<?=$log_link?>" id="log" onclick="javascript:return logoutchk();"><?=$btn['log']?></a></span>
		<span><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a></span>
		<div id="title"><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'">냉장고나라</a></div>
	</header>	
	<form method="post" name="writeform" id="Categorylink" action="">
		<input type="hidden" name="user_id" value=''>
	</form>
	<nav id='menu'>
		<form method="post" name="form" action="<?=$play_link?>" style="display: inline">
    		<input type="hidden" name="user_id" id="menu_hidden" value='<?=$filtered_user_id?>'>
    		<span><input type="submit" onclick="javascript:logchk()" id="play" value="놀이학습"></span>
    	</form>
    	<form method="post" name="form" action="<?=$home_link?>" style="display: inline">
    		<input type="hidden" name="user_id" id="menu_hidden" value='<?=$filtered_user_id?>'>
    		<span><input type="submit" onclick="javascript:logchk()" id="home" value="마이 홈"></span>
    	</form>
    	<span id="morespan"><input type=button id="moreButton" value='더보기' align="bottom" />
			<br><span id="moremenu"  class="moreboard">
				<a href="">사이트 소개</a>
				<a href="">개발자 소개</a>
			</span>	
    	</span><!--더보기-->    		
  		</form>
	</nav>


<body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/index.js"></script>	
	<header>			
		<span><a href="<?=$log_link?>" id="log" onclick="javascript:return logoutchk();"><?=$btn['log']?></a></span>
		<span><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a></span>
	</header>
		<div id="title"><a href='<?=$logo_link?>'>로고</a></div>
		
	<form method="post" name="writeform" id="Categorylink" action="">
		<input type="hidden" name="user_id" value=''>
	</form>
	<nav id='menu'>
		<span id="category">
			<a href="<?=$play_link?>" onclick="<?=$loginchk?>">놀이학습</a>
    		<a href="<?=$home_link?>" onclick="<?=$loginchk?>">마이홈</a>
		</span>
		<span id="morespan">
			<input type=button id="moreButton" value='더보기' align="bottom" />
			<br><span id="moremenu"  class="moreboard">
				<a href="">사이트 소개</a>
				<a href="">개발자 소개</a>
			</span>	
		</span><!--더보기-->    		
		</form>
	 </nav>

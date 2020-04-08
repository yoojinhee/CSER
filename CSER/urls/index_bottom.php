
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
    		<span><input type="submit" onclick="logchk()" id="play" value="놀이학습"></span>
    	</form>
    	<form method="post" name="form" action="<?=$home_link?>" style="display: inline">
    		<input type="hidden" name="user_id" id="menu_hidden" value='<?=$filtered_user_id?>'>
    		<span><input type="submit" onclick="logchk()" id="home" value="마이홈"></span>
    	</form>
    	<script>
			$(document).ready(function () {
	        });
	        $(document).ready(function () {
	            var toggleStyleSwitcher = function () {
	                $('#morespan').addClass('bold');
	            };
	            $('#moremenu').addClass('hidden');
	 
	            $('#moreButton').click(function (event) {
	                $('#moremenu').toggleClass('hidden');
	            });
	 
	            $('div:contains("내용 더보기")').click(toggleStyleSwitcher);
	        });//더보기  		
    	</script>
    	<span id="morespan"><input type=button id="moreButton" value='더보기' align="bottom" />
			<br><span id="moremenu"  class="moreboard">
				<a href="">사이트 소개</a>
				<a href="">개발자 소개</a>
			</span>	
    	</span><!--더보기-->    		
    		<script>
    			function logchk(){
    				value=document.getElementById('menu_hidden').value;

    				if(!empty(value)){
    					document.form.submit();
    				}
    			}// 메뉴를 클릭했을때 로그인을 했는지 안했는지 체크하고 경로 지정
    		</script>
  		</form>
	</nav>

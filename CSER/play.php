<?php
require_once("urls/index_top.php");
?>
<title>놀이학습</title>
	<style>
		@import url("css/index.css");
		@import url("css/play.css");
	</style>
</head>
<?php
require_once("urls/index_bottom.php");
?>
<section>
	<article>
		<!-- <div class="box" style="background: #BDBDBD;">
		    <img class="profile" src="/images/tistory.JPG">
		</div> -->
		<div class="container">
			<script>
				function goPost(user_id,num){
					var form = document.writeform;
					var Categorylink=document.getElementById('Categorylink');

					switch(num){
						case 1:
							Categorylink.setAttribute("action","호기심탐구.php");
							break;
						case 2:
							Categorylink.setAttribute("action","스케치북.php");
							break;
					}
					form.user_id.value=user_id;
					form.submit();
				}//카테고리 선텍후 넘어감 
			</script>
			<form method="post" name="writeform" id="Categorylink" action="">
				<input type="hidden" name="user_id" value="">
			</form>
			<div class="item">
				<a href="javascript:goPost(<?=$filtered_user_id?>,1)">
					<img src="images/test.jpg" alt="호기심탐구">
				</a>
			</div>
			<div class="item">
				<a href="javascript:goPost(<?=$filtered_user_id?>,2)">
					<img src="images/test.jpg" alt="스케치북">
				</a>
			</div>
			<div class="item">comming soon</div>
		</div>
	</article>
</section>
</body>
</html>
<?php
require_once("lib/index_top.php");
?>
<title>놀이학습</title>
	<style>
		@import url("css/index.css");
		@import url("css/play.css");
	</style>
</head>
<?php
require_once("lib/index_bottom.php");
?>
<section>
	<article>
		<div class="container">
			<div class="item">
				<a href="curiosity.php?id=<?=$filtered_user_id?>">
					<img src="images/test.jpg" class="Categoryimg" alt="호기심탐구">
				</a>
			</div>
			<div class="item">
				<a href="">
					<img src="images/test.jpg" class="Categoryimg" alt="스케치북">
				</a>
			</div>
			<!-- <div class="item">comming soon</div> -->
		</div>
	</article>
</section>
</body>
</html>
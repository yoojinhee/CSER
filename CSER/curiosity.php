<?php
// require_once("lib/index_top.php");
?>
<title>Document</title>
<style type="text/css">
	/*@import url("css/curiosity.css");*/
</style>
</head>
	<?php
	// require_once("lib/index_bottom.php");
	?>
	<div>과일&채소를 카메라에 비춰보세요</div>
	<button type="button" onclick="init()">Start</button>
	<div id="webcam-container"></div>
	<div id="label-container"></div>
	<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
	<script src="js/curiosity.js"></script>
</body>
</html>
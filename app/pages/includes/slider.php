<link rel="stylesheet" href="<?= ROOT ?>/assets/css/sliderstyle.css">

<!--image slider start-->
<div class="slider">
	<div class="slides">
		<!--radio buttons start-->
		<input type="radio" name="radio-btn" id="radio1">
		<input type="radio" name="radio-btn" id="radio2">
		<input type="radio" name="radio-btn" id="radio3">
		<input type="radio" name="radio-btn" id="radio4">
		<!--radio buttons end-->
		<!--slide images start-->
		<div class="slide first">
			<img src="<?= ROOT ?>/assets/images/img-1.jpg" alt="">
		</div>
		<div class="slide">
			<img src="<?= ROOT ?>/assets/images/img-2.jpg" alt="">
		</div>
		<div class="slide">
			<img src="<?= ROOT ?>/assets/images/img-3.jpg" alt="">
		</div>
		<div class="slide">
			<img src="<?= ROOT ?>/assets/images/img-4.jpg" alt="">
		</div>
		<!--slide images end-->
		<!--automatic navigation start-->
		<div class="navigation-auto">
			<div class="auto-btn1"></div>
			<div class="auto-btn2"></div>
			<div class="auto-btn3"></div>
			<div class="auto-btn4"></div>
		</div>
		<!--automatic navigation end-->
	</div>
	<!--manual navigation start-->
	<div class="navigation-manual">
		<label for="radio1" class="manual-btn"></label>
		<label for="radio2" class="manual-btn"></label>
		<label for="radio3" class="manual-btn"></label>
		<label for="radio4" class="manual-btn"></label>
	</div>
	<!--manual navigation end-->
</div>
<!--image slider end-->

<script type="text/javascript">
	var counter = 1;
	setInterval(function() {
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if (counter > 4) {
			counter = 1;
		}
	}, 5000);
</script>
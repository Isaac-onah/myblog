<link href="<?= ROOT ?>/assets/css/sliderstyle.css" rel="stylesheet">

<!--image slider start-->
<section class="section">
	<div class="containerzar">
		<div id="slizar">
			<div class="itemzar" style="background-image: url(1.jpg);">
				<div class="contentzar">
					<div class="namezar">LUNDEV</div>
					<div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
					<button>See more</button>
				</div>
			</div>
			<div class="itemzar" style="background-image: url(4.jpg);">
				<div class="contentzar">
					<div class="namezar">LUNDEV</div>
					<div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
					<button>See more</button>
				</div>
			</div>
			<div class="itemzar" style="background-image: url(3.jpg);">
				<div class="contentzar">
					<div class="namezar">LUNDEV</div>
					<div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
					<button>See more</button>
				</div>
			</div>
			<div class="itemzar" style="background-image: url(4.jpg);">
				<div class="contentzar">
					<div class="namezar">LUNDEV</div>
					<div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
					<button>See more</button>
				</div>
			</div>
			<div class="itemzar" style="background-image: url(5.jpg);">
				<div class="contentzar">
					<div class="namezar">LUNDEV</div>
					<div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
					<button>See more</button>
				</div>
			</div>
			<div class="itemzar" style="background-image: url(6.jpg);">
				<div class="contentzar">
					<div class="namezar">LUNDEV</div>
					<div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
					<button>See more</button>
				</div>
			</div>
		</div>
		<div class="buttons">
			<button id="prevzar"><i class="fa-solid fa-angle-left"></i></button>
			<button id="nextzar"><i class="fa-solid fa-angle-right"></i></button>
		</div>
	</div>
</section>
<!--image slider end-->

<script>
	document.getElementById('nextzar').onclick = function() {
		let lists = document.querySelectorAll('.itemzar');
		document.getElementById('slizar').appendChild(lists[0]);
	}
	document.getElementById('prevzar').onclick = function() {
		let lists = document.querySelectorAll('.itemzar');
		document.getElementById('slizar').prepend(lists[lists.length - 1]);
	}

	// Function to go to the next item
	function nextItem() {
		let lists = document.querySelectorAll('.itemzar');
		document.getElementById('slizar').appendChild(lists[0]);
	}

	// Set up a timer to automatically go to the next item
	const autoSlideInterval = 5000; // Adjust the interval as needed (in milliseconds)
	let autoSlideTimer = setInterval(nextItem, autoSlideInterval);
</script>
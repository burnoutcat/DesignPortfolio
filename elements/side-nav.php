<div class="side-nav" onload="canvas04()">
	<a href="www.linkedin.com/in/jackyzhengdesign" target="_blank"> 
		<img src="img/linkedin_logo_100.svg" class="media-image" alt="Linkedin">
	</a>
	<a href="https://github.com/burnoutcat" target="_blank">
		<img src="img/github_logo_100.svg" class="media-image" alt="Github">
	</a>
	<canvas id="canvas-4"></canvas>

	<script>

		$(document).ready(function(){
			canvas04();

		});

		canvas04 = () => {
			var c = document.getElementById('canvas-4');
			var ctx = c.getContext('2d');

			c.width = 50;
			c.height = 100;

			ctx.strokeStyle = 'white';
			ctx.lineWidth = 0.5;
			ctx.beginPath();
			ctx.moveTo(25,0);
			ctx.lineTo(25,100);
			ctx.stroke();
		}

	</script>
</div>
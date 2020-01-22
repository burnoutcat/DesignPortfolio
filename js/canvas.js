$(document).ready(function(){
	indexCanvas();
	canvas01();
});


indexCanvas = () =>{
	var c = document.getElementById('index-canvas');
	var a = document.getElementById('action');
	console.log(a);
	var ctx = c.getContext('2d');
	var indexBackground = new Image();
	var raf;
	var inaction = false;

	var vx = 0;
	var vy = 0; 

	var x = 0; 
	var y = 0;

	function clear(){
		ctx.clearRect(0,0,c.width,c.height);
	}

	function action(){
		clear();
		ctx.drawImage(indexBackground,x,y,(c.width+200),(c.height+200));
		window.requestAnimationFrame(action);
	}


	a.addEventListener('mousemove', function(e) {
	    clear();
	    x = x + 0.05 * (- e.clientX/10 - x);
	    y = y + 0.05 * (- e.clientY/5 - y);
	    action();
  });

	a.addEventListener('mouseleave', function(e) {
    	window.cancelAnimationFrame(action);
  });


	// indexBackground.onload = function()
	// {
	// 	action();
	// };

	indexBackground.src = "img/placeholder_index.png";

	c.width = 1600;
	c.height = 1000;

	console.log("image loaded");
	}

canvas01 = () =>{
	var c = document.getElementById('canvas-1');
	var ctx = c.getContext('2d');

	c.width = 1600;
	c.height = 100;

	ctx.strokeStyle = 'white';
	ctx.lineWidth = 3;
	ctx.beginPath();
	ctx.moveTo(100,100);
	ctx.lineTo(100,0);
	ctx.lineTo(1000,0);
	ctx.stroke();

}








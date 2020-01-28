$(document).ready(function(){
	indexCanvas();
	canvas01();
	canvas02();
	canvas03();
	canvas04();
});


indexCanvas = () =>{
	var c = document.getElementById('index-canvas');
	var a = document.getElementById('action');
	console.log(a);
	var ctx = c.getContext('2d');
	var indexBackground = new Image();
	var raf;

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
  	action();

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

canvas02 = () => {
	var c = document.getElementById('canvas-2');
	var ctx = c.getContext('2d');

	c.width = 300;
	c.height = 350;

	ctx.strokeStyle = '#232323';
	ctx.lineWidth = 3;
	ctx.strokeRect(0,0,300,350);
	ctx.beginPath();
	ctx.moveTo(0,80);
	ctx.lineTo(300,80);
	ctx.moveTo(0,160);
	ctx.lineTo(300,160);
	ctx.moveTo(0,170);
	ctx.lineTo(300,170);
	ctx.moveTo(0,250);
	ctx.lineTo(300,250);
	ctx.moveTo(0,330);
	ctx.lineTo(300,330);
	ctx.moveTo(300,0);
	ctx.lineTo(185,80);
	ctx.stroke();

	var printer = new Path2D();
	ctx.fillStyle = '#232323';
	ctx.beginPath();
	ctx.moveTo(182,80);
	ctx.lineTo(195,80);
	ctx.lineTo(190,70);
	ctx.fill();


}

canvas03 = () => {
	var c = document.getElementById('canvas-3');
	var ctx = c.getContext('2d');

	c.width = 400;
	c.height = 400;

	ctx.strokeStyle = 'white';
	ctx.lineWidth = 3;
	ctx.beginPath();
	ctx.moveTo(400,350);
	ctx.lineTo(400,400);
	ctx.lineTo(0,400);
	ctx.stroke();

}

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








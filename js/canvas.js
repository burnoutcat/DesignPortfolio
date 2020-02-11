var is_chrome = (typeof window.chrome === "object" && navigator.appVersion.indexOf('Edge') === -1);


indexLoaded = () => {
	console.log(is_chrome);
	if(is_chrome == 1){
		indexCanvas();
		canvas01();
		canvas02();
		canvas03();
	} else {
		indexCanvasFixed();
		canvas01();
		canvas02();
		canvas03();
	}
}

skillsetLoaded = () => {
	canvas05();
	indexCanvasFixed();
}

portfolioLoaded = () =>{
	indexCanvasFixed();
}

portfoliodetailLoaded = () =>{
	canvas06();
	if (true) {}
}


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

	indexBackground.src = "img/placeholder_index.png";

	c.width = 1600;
	c.height = 1000;

	console.log("image loaded");
}


indexCanvasFixed = () =>{
	var c = document.getElementById('index-canvas');
	var ctx = c.getContext('2d');
	var indexBackground = new Image();
	indexBackground.src = "img/placeholder_index.png";


	c.width = 1600;
	c.height = 1000;

	indexBackground.addEventListener('load', function(e){
		ctx.drawImage(indexBackground,0,0,1800,1200);
	});

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


canvas05 = () => {
	var c = document.getElementById('canvas-5');
	var ctx = c.getContext('2d');

	c.width = 400;
	c.height = 150;

	ctx.strokeStyle = '#232323'; 
	ctx.lineWidth = 3;
	ctx.beginPath();
	ctx.moveTo(0,0);
	ctx.lineTo(400,0);
	ctx.lineTo(400,150);
	ctx.lineTo(0,150);
	ctx.lineTo(0,0);
	ctx.stroke();

	ctx.strokeStyle = '#232323'; 
	ctx.lineWidth = 1;
	ctx.beginPath();
	ctx.moveTo(400,0);
	ctx.lineTo(280,55);
	ctx.stroke();

	ctx.fillStyle = '#232323';
	ctx.beginPath();
	ctx.moveTo(290,57);
	ctx.lineTo(276,57);
	ctx.lineTo(285,47);
	ctx.fill();

}

canvas06 = () => {
	var c = document.getElementById('canvas-6');
	var ctx = c.getContext('2d');

	c.width = 1000;
	c.height = 400;

	ctx.strokeStyle = 'white';
	ctx.lineWidth = 2;
	ctx.beginPath();
	ctx.moveTo(485,30);
	ctx.lineTo(500,50);
	ctx.lineTo(515,30);
	ctx.stroke();

	ctx.strokeStyle = '#969696';
	ctx.lineWidth = 2;
	ctx.beginPath();
	ctx.moveTo(500,100);
	ctx.lineTo(500,380);
	ctx.lineTo(10,380);
	ctx.lineTo(10,399)
	ctx.stroke();

}

canvas07 = () =>{
	var c = document.getElementById('canvas-7');
	var ctx = c.getContext('2d');

	c.width = 600;
	c.height = 60;

	ctx.strokeStyle = 'white';
	ctx.lineWidth = 1;
	ctx.beginPath();
	ctx.moveTo(10,20);
	ctx.lineTo(350,20);
	ctx.lineTo(350,50);
	ctx.stroke();
}








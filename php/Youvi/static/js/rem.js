
	function rem() {
		var htmlEle = document.documentElement;
		var winWidth = htmlEle.clientWidth || document.body.clientWidth;
		var width = winWidth;
		if(winWidth > 1441){htmlEle.style.fontSize = Math.ceil(100 * (width / 1920)) + 'px';}
		if(winWidth < 1601){htmlEle.style.fontSize = Math.ceil(110 * (width / 1920)) + 'px';}
		if(winWidth < 1441){htmlEle.style.fontSize = Math.ceil(120 * (width / 1920)) + 'px';}
		if(winWidth < 1367){htmlEle.style.fontSize = Math.ceil(130 * (width / 1920)) + 'px';}
		if(winWidth < 1201){htmlEle.style.fontSize = Math.ceil(140 * (width / 1920)) + 'px';}
		if(winWidth < 1025){htmlEle.style.fontSize = 100 + 'px';}
	};
	rem();
	window.onresize = function() {
		rem();
	}
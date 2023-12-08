
	function rem() {
		var htmlEle = document.documentElement;
		var winWidth = htmlEle.clientWidth || document.body.clientWidth;
		var width = winWidth <= 1024 ? 1024 : winWidth;
		var w = $(window).width();
		if(w > 1441){htmlEle.style.fontSize = Math.ceil(100 * (width / 1920)) + 'px';}
		if(w < 1441){htmlEle.style.fontSize = Math.ceil(120 * (width / 1920)) + 'px';}
		if(w < 1367){htmlEle.style.fontSize = Math.ceil(130 * (width / 1920)) + 'px';}
		if(w < 1201){htmlEle.style.fontSize = Math.ceil(140 * (width / 1920)) + 'px';}
	};
	rem();
	window.onresize = function() {
		rem();
	}
$(function(){

	var arrStars = $('.star_UL ul');

	for(var k = 0; k < $('.star_UL ul').length; k++){
		arrStars[k].className = 'star'+k;
		var star_arrLi = $('.star'+[k] +'> li');
		fun(star_arrLi);
	}

	function fun(arrLi){
		for (var i =0; i<arrLi.length; i++) {
			arrLi[i].index = i+1;
			arrLi[i].onmouseover = function(){
				//显现值几个星星
				ShowTars(this.index);
			};

			//鼠标离开后恢复到上次显现的几个星星
			arrLi[i].onmouseout = function() {
				var sidNum = $(this).parents('ul').attr('sid');
				ShowTars(sidNum);// 显现值几个星星
			};

			//点击后进行评分处理
			arrLi[i].onclick = function() {
				$(this).parents('ul').attr('sid',this.index);
			};
		}

		// 显现值几个星星
		function ShowTars(num) {
			for(var i = 0; i < arrLi.length; i++)
				arrLi[i].className = i < num ? "on" : "";
		};
	};
});
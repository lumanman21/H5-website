




 // 语言
 $(".top_language").click(function(){
  event.stopPropagation();
  if($(this).hasClass("on")){
    $(this).removeClass("on") ;
  }else{
    $(this).addClass("on") ;
  }
});
$("body").click(function (e) {
  event.stopPropagation();
  $(".top_language>li").removeClass("on");
});



// //移动端导航栏下拉
// $(function(){
//      $('.ph_moreli').hover(function(){
//         $('.more_product').stop().slideToggle()
//      })
// })

//pc端导航栏下拉
$(function(){
     $('#menu-item-179').hover(function(){
        $(this).children('ul').stop().slideToggle()
     })
})



//移动端点击菜单,显示导航栏
$('.phone_more').click(function(){
  $('.right_more').hide()
  $('.menu_bar').show()
})
$('#back_page').click(function(){
  $('.menu_bar').hide()
  $('.right_more').show()
})



// //点击邮箱表单弹出
// $('#popForm').click(function(){
//   $('#pop_form').show()
// })
// $('#form_back').click(function(){
//   $('#pop_form').hide()
// })

//弹出表单
function asfrom(){
  document.getElementById('pop_form').style.display='block';
}
$('#form_back').click(function(){
  $('#pop_form').hide()
})
  





//回到顶部
function goTop() {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    500
  );
}



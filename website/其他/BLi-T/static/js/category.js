if(screen.width < 1025){
    $(function(){
        $(".cat_nav_tit").click(function () {
            $(this).toggleClass("active");
            $(".cat_nav_list").stop().slideToggle();
        });
    });
}



$(document).ready(function() {

    $('.cat_nav_list li.active').children('.cat_fold_sub').slideDown();

    $('.cat_fold_tit iconify-icon').click(function() {
        var $li = $(this).closest('li');
        var $sub = $li.children('.cat_fold_sub');
        $li.toggleClass('active');
        $sub.slideToggle();
        $li.siblings().removeClass('active').children('.cat_fold_sub').slideUp();
        $(this).trigger('switched');
    });

});

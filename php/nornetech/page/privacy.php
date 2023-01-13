<?php

/*

Template Name: privacy

*/

get_header();?>





<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>





 <!-- 当前位置 -->

 <div class="in_position">

    <div class="wrap container">

     <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<!-- 内容 vision-->

<div class="privacy wrap">

    <div class="privacy_cont wrap box_mg">

        <div class="tit"><h2>Privacy Policy</h2></div>

        <article>

            <?php the_content(); ?>

        </article>

    </div>

</div>



<!-- footer -->

<?php get_footer();?>



	

</body>

</html>
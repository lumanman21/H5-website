<?php
get_header();
?>


<!-- header -->
<?php get_template_part('top') ?>



<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/n_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp">leking news</h4>
    <p class="wow slideInUp" data-wow-delay=".4s">Convenient and timely understanding of enterprise development</p>
    <div class="img wow slideInUp" data-wow-delay=".5s"><img src="<?php bloginfo('template_url'); ?>/static/images/n_banner_ico.png" alt=""></div>
  </div>
</div>

<main>
  <div class="pro_list_box box_mg wow slideInUp">
    <div class="circle_bc"></div>
    <ul class="i_new_list wrap2">

    <?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="img">
          <?php if ( has_post_thumbnail()):?>
          <?php the_post_thumbnail( 'full-post-thumb'); ?>
          <?php else : ?>
          <img id="catch" src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </div>

					<div class="txt">
						<h3><?php the_title_attribute(); ?></h3>
						<div class="intro"><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...');?></div>
            <div class="txt_bott">
              <p class="data"><?php the_time('Y-m-d') ?></p>
              <div class="n_but">MORE<i></i></div>
            </div>
					</div>
				</a>
			</li>
			<?php endwhile; endif; ?>		



      
      <!-- <li><a href="">
        <div class="img"><img src="static/images/other/i_n1.jpg" alt=""></div>
        <div class="txt">
          <h3>Further enhance the technology research and development</h3>
          <p>Further enhance the technology research and development capabilities, the product line expanded to more than 30 models, covering car/desktop/household/commercial and other.</p>
          <div class="txt_bott">
            <p class="data">2023.02.03</p>
            <div class="n_but">MORE<i></i></div>
          </div>
        </div>
      </a></li> -->
    </ul>
    <!-- page -->
    <div class="inPage">
      <div class="circle_bc"></div>
      <div class="in_page_box">
        <div class="in_page">
          <?php zdy_paging(); ?>
        </div>
      </div>
    </div>
  </div>



 
</main>





<?php get_footer(); ?>


</body>
</html>
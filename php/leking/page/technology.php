<?php
/*
Template Name: technology
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>

<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/tec_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp"data-wow-delay=".3s">leking core technology</h4>
    <p class="wow slideInUp" data-wow-delay=".4s">Company and Products Certificated by ISO, BSCI, TUV, SGS, CE, FCC,<br>RoHS, ETL, Energy star, AHAM, etc.</p>
    <img class="wow slideInUp" data-wow-delay=".5s" src="<?php bloginfo('template_url'); ?>/static/images/tec_banner_ico.png" alt="">
  </div>
</div>

<main>
  <div class="tec_box box_mg wrap2">
    <div class="circle_bc"></div>
    <p class="i_com_tit wow slideInUp">air purifier filter principle</p>
    <div class="img wow slideInUp" data-wow-delay=".3s"><img src="<?php bloginfo('template_url'); ?>/static/images/tec_1.webp" alt=""></div>


    <ul class="tec_list wrap2 wow slideInUp">
    <?php
              $technology = xintheme('technology');
              if($technology){
              foreach($technology as $value):
            ?>
            <li>
              <div class="img"><img src="<?php echo $value['technology_pic'] ?>" alt=""></div>
                <div class="txt">
                  <h3><?php echo $value['technology_tit'] ?></h3>
                  <p><?php echo $value['technology_txt'] ?></p>
              </div>
            </li>
            <?php endforeach; } ?>

      <!-- <li>
        <div class="img"><img src="static/images/tec_2.png" alt=""></div>
        <div class="txt">
          <h3>PRE-FILTER</h3>
          <p>he primary filtration uses an aluminum alloy filter located in the pre-filter. It is mainly used for filtering dust larger than 5 microns, including large dustparticles, dander, pollen, floating debris, and other pollutants. It can be washed many times and used repeatedly.</p>
        </div>
      </li> -->
      <div class="circle_bc"></div>
    </ul>
  </div>
</main>




<?php get_footer(); ?>


</body>
</html>
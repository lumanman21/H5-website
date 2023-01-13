<?php
/*
Template Name: ceo
*/
get_header();?>

    


<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="top_banner ceo_banner">
  <img src="<?php bloginfo('template_url'); ?>/static/images/ceo_banner.webp" alt="" />
  <h2>CEO MESSAGE</h2>
</div>
<main class="n_main">
  <!-- in_position -->
  <div class="in_position">
    <div class="wrap container">
      <?php echo in_breadcrumbs(); ?>
    </div>
  </div>


  <ul class="ceo_content1">
    <li class="wow slideInRight">
      <div class="right_txt">
        <h2>Thanks for visiting Dery website</h2>
        <p>No matter where you come from, what job you do and kind of information you expect to get, here we would like to share with you Dery’s knowledge of carbon black, rational analysis of the industry and judgement of future trends and hope they will be helpful for your work and life.</p>
      </div>
      <div class="left_img"><img src="<?php bloginfo('template_url'); ?>/static/images/c1.webp" alt=""></div>
    </li>
    <li  class="wow slideInLeft">
      <div class="left_img"><img src="<?php bloginfo('template_url'); ?>/static/images/c2.webp" alt=""></div>
      <div class="right_txt">
        <h2>Anhui Dery Material Science Co.,LTD. </h2>
        <p>Dery has been concentrating on R&D and production of special carbon black since its establishment of 2006. Through continuous endeavors, Dery hopes to explore innovative technologies and products in high-end pigment carbon black field and makes contributions to improve overall level of Chinese carbon black industry. What’s more, Dery intends to be internationally recognized and let more industries and customers learn about high-quality Chinese special pigment carbon black and know more about Dery.   </p>
      </div>
    </li>

  </ul>
  <div class="ceo_content2 wrap wow slideInUp">
    <h2>sales network layouts</h2>
    <div class="txt">
      With active global sales network layouts, channel planning improvements and focusing on distributors-cultivation marketing patterns, Dery grows with customers together and gains great achievements over the years. Therefore, Dery cherishes distributors as the core treasure in international markets promotion.
    </div>
    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c3.webp" alt=""></div>
  </div>
  <div class="ceo_content2 ceo_content3 wrap wow slideInUp">
    <h2>Sincerely, look forward to your joining ！</h2>
    <div class="txt">
      <p>Major customers expansion is of immediate and positive effect on company’s visibility enhancement. Dery attaches great importance to data analysis of major customers, by keeping an eye on latest happenings in the industry and timely offering market information, assisting  customers to check inventory and coordinately negotiating on goods preparation and other matters, Dery has been trying best to offer customers with satisfactory products and services.</p>
      <br>
      <p>Positioned as middle and high-end special pigment carbon black manufacturer, Dery serves those who have strict demand on black jetness and dispersion in relevant industries. In the future 5 years, Dery will continue to increase R&D investment, explore relative fields of carbon black and gradually establish R&D lab and production plants of exclusive carbon black dispersing agent and Dery will strive to be professional provider integrating of carbon black research and development, production and application. 
        Sincerely, look forward to your joining.</p>
    </div>
  </div>
</main>
<div class="bottom_form wow slideInUp">
  <div class="com_tit">
    <div class="tit_bc">Contact us for a quote</div>
    <h1>Contact us for a quote</h1>
    <div class="line"></div>
    <div class="liner"></div>
  </div>
  <?php echo do_shortcode( ' [wpforms id="22"] ' ); ?>
</div>




<!-- footer -->
<?php get_footer();?>




</body>
</html>
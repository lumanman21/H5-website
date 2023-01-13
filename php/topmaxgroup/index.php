<?php
get_header();
?>
    
    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="i_banner">
  <div class="i_banner_list">
    <ul class="swiper-wrapper">
      <li class="swiper-slide">
        <div class="img">
          <img src="<?php bloginfo('template_url'); ?>/static/images/banner1.jpg" alt="">
        </div>
        <div class="a_bannerBox">
          <div class="a_banner">
            <h1>DESIGN FROM TOP MAX</h1>
            <p>WE HAVE A VARIETY OF PRODUCTION</p>
            <p>PROCESSES: KNITTING, SEWING, </p>
            <p>LINKING, MACHING.</p>
            <div class="com_button"><a href="<?php echo get_category_link(4); ?>">read more</a></div>
          </div>
        </div>
      </li>
      <li class="swiper-slide">
        <div class="img">
          <img src="<?php bloginfo('template_url'); ?>/static/images/banner2.webp" alt="">
        </div>
        <div class="b_banner">
          <div class="b_tit">
            <p>THE ALL</p>
            <p>AROUND</p>
            <p>BEST SOCKS</p>
          </div>
          <div class="fu_tit">SOFT AND SURPRISINGLY DURABLE</div>
          <div class="com_button"><a href="<?php echo get_category_link(6); ?>">read more</a></div>
        </div>
      </li>
      <li class="swiper-slide">
        <div class="img">
          <img src="<?php bloginfo('template_url'); ?>/static/images/banner3.webp" alt="">
        </div>
        <div class="c_banner">
          <h1>YOUR OWN ITEM AND DESIGN ARE WELCOMED</h1>
          <p>Shopping/Party/Outing/Surfing/Date/Work/Home</p>
          <div class="com_button"><a href="<?php echo get_category_link(5); ?>">read more</a></div>
        </div>
      </li>
    </ul>
  </div>
  <div class="banner-pagination"></div>
  <div class="banner-button-prev">&lt;</div>
  <div class="banner-button-next">&gt;</div>
</div>
<script>
  var swiper = new Swiper(".i_banner_list", {
  slidesPerView: 1,
  spaceBetween: 0,
  slidesPerGroup: 1,
  // autoplay: {
  //   delay: 3500,
  //   disableOnInteraction: false,
  // },
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".banner-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".banner-button-next",
    prevEl: ".banner-button-prev",
  },
  observer: true,
  observeParents: true,
});
</script>
<main>
  <ul class="h_list wrap wow slideInUp">
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/h1.png" alt=""></div>
      <h2>Production Capacity</h2>
      <p>Hard power plant, equipped with advanced machines and assembly lines to ensure production capacity</p>
    </li>
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/h2.png" alt=""></div>
      <h2>Quality Assurance</h2>
      <p>We will provide you with our creative ideas,Customized Logo And Packages Are Available</p>
    </li>
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/h3.png" alt=""></div>
      <h2>Fast Delivery</h2>
      <p>We will send the samples to you by express and notify you online</p>
    </li>
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/h4.png" alt=""></div>
      <h2>Excellent Service</h2>
      <p>Provide first-class quality services to meet customer demand for products</p>
    </li>
  </ul>

  <div class="h_product wow slideInUp">
    <div class="tit">
      <div class="tit_bc">PRODUCT CATERORY</div>
      <h1>PRODUCT CATERORY</h1>
      <p>Our products include indoor slippers、toy slippers、daily wear socks、sandals、flip flops and other relevant products</p>
    </div>
    <div class="hp_content">
      <ul class="hp_box wrap">
      <?php
          $args=array(
          'child_of'=> 2,
          'parent' => 2,
          'hide_empty'=>'0',
          'orderby'=>'id',
          'order'=>'asc',
          );
          $categories=get_categories($args);
          foreach($categories as $category) {
          $category_data = get_term_meta( $category->term_id, 'category_options', true );
          $cat_term_id = get_category($category)->term_id;
          $cat_taxonomy = get_category($category)->taxonomy;
          $category_name = get_cat_name($cat);  // 当前分类名称
          // if ($upcategory_name==$category->name)
          // {
          //         $style1="products_active";
          // }else{
          //         $style1="";
          // };
          if ($category_name==$category->name)
          {
                  $style2="products_active";
          }else{
                  $style2="";
          }
        ?>

  <li>
    <a href="<?php echo get_category_link( $category->term_id ) ;?>">
          <div class="img"><img src="<?php echo $category_data['cat_slt'] ?>" /></div>
          <div class="txt">
            <p><?php echo $category->name;?></p>
            <div class="com_button">MORE</div>
          </div>
    </a>
  </li> 
  <?php } ?>
          
      

        <!-- <li><a href="#">
          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp" alt=""></div>
          <div class="txt">
            <p>Flip Flops</p>
            <div class="com_button">MORE</div>
          </div>
        </a></li> -->
      </ul>
    </div>
  </div>

  <div class="h2_content wow slideInUp">
    <h3>2008</h3>
    <div class="txt">
      <p>YEAR</p>
      <p>ESTABLISHED</p>
    </div>
  </div>

  <div class="ha_content_tit wow slideInUp">
    <div class="ha_tit1 on_hatit"><img src="<?php bloginfo('template_url'); ?>/static/images/ha.png" alt=""><p>ABOUT US</p></div>
    <div class="ha_tit2"><img src="<?php bloginfo('template_url'); ?>/static/images/hc.png" alt=""><p>CERTIFICATE</p></div>
  </div>
  <div class="ha_content wow slideInUp">
    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/h_A.jpeg" alt=""></div>
    <div class="aboutBox">
      <p class="aboutTit">ABOUT <span>TOP MAX</span></p>
      <div class="aboutTxt">
        <?php echo mb_strimwidth(get_page(19)->post_content,0,1000); ?>
      </div>
      <div class="com_button"><a href="#">READ MORE</a></div>
    </div>
    <div class="certifyBox">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/swiper-bundle.min.css">
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <?php get_template_part( 'template-parts/certify'); ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <!-- Swiper JS -->
      <script src="<?php bloginfo('template_url'); ?>/static/js/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          autoplay: {
          delay: 3500,
          disableOnInteraction: false,
          },
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });
      </script>
    </div>
  </div>
  <script>
    $('.ha_tit2').click(function(){
      $('.ha_tit1').removeClass('on_hatit')
      $('.ha_tit2').addClass('on_hatit')
      $('.aboutBox').css('display','none')
      $('.certifyBox').css('display','block')
    })
    $('.ha_tit1').click(function(){
      $('.ha_tit2').removeClass('on_hatit')
      $('.ha_tit1').addClass('on_hatit')
      $('.aboutBox').css('display','block')
      $('.certifyBox').css('display','none')
    })
  </script>



  <div class="h_partner wow slideInUp">
    <div class="tit">
      <div class="tit_bc">Partner</div>
      <h1>Partner</h1>
      <p>With the service and in good faith in exchange for your trust and support, mutual benefit and create a win-win</p>
    </div>
     <!-- partner_swiper -->
     <div class="i_partner_box wrap">
        <div class="i_partner">
            <div class="i_partner_list swiper-container">
                <ul class="swiper-wrapper" id="partner_list">
                <?php get_template_part( 'template-parts/partner'); ?>
                </ul>				
            </div>
            <div class="pt-pagination"></div>
            <div class="pt-button-next"></div>
            <div class="pt-button-prev"></div>
        </div>
        <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
      </div>
    <script>
      var pswiper = new Swiper('.i_partner_list', {
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.pt-button-next',
            prevEl: '.pt-button-prev',
        },
        pagination: {
            el: '.pt-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        observer: true,
        observeParents: true,
        breakpoints: {
            0: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 1
            },
            960: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2
            },
            1200: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1
            }
        }
      });
      //查看大图
      var image = new Viewer(document.getElementById('partner_list'), {
        button: true,
        navbar: false,
        width: 660,
        title: true
      });
    </script>
  </div>
</main>



<!-- footer -->
<?php get_footer();?>
<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

</body>
</html>

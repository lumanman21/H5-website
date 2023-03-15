<?php
/*
Template Name: about us
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/a_banner.webp" alt="">
  <h3 class="wow slideInUp">about us</h3>
  <div class="video_a" onclick="vShow()"></div>
</div>


<main>
  <div class="a_care box_mg wrap">
    <div class="circle_bc"></div>
    <p class="i_com_tit wow slideInUp"><span>CARE AIR CARE YOU</span></p>
    <div class="txt wow slideInUp" data-wow-delay=".3s"><?php the_content(); ?></div>
  </div>

  <!-- advantage -->
  <p class="i_com_tit wow slideInUp">OUR ADVANTAGES</p>
  <div class="a_ad_box delta_t delta_b wow slideInUp" data-wow-delay=".3s">
    
      <ul class="a_ad_pic">
        <?php
            $i_ad = xintheme('i_ad');
            if($i_ad){
            foreach($i_ad as $value):
          ?>
          <li><img src="<?php echo $value['i_ad_bc'] ?>" /></li>
          <?php endforeach; } ?>

      </ul>
  
  
  
    <ul class="a_ad_list">
        <?php
              $i_ad = xintheme('i_ad');
              if($i_ad){
              foreach($i_ad as $value):
            ?>
            <li class="swiper-slide">
              <div class="a_ad_tit">
                <p><?php echo $value['i_ad_tit'] ?></p>
                <img src="<?php echo $value['i_ad_img'] ?>" />
              </div>
              <div class="a_ad_txt"><?php echo $value['i_ad_txt'] ?></div>
            </li>
            <?php endforeach; } ?>

      <!-- <li>
        <div class="a_ad_tit">
          <p>No liquid delivered？</p>
          <img src="static/images/ad_4.png" alt="">
        </div>
        <div class="a_ad_txt">
          1.Pump is not primed：Check the priming system.
          2.Speed too low：Check the engine is running at the required power/speed.
        </div>
      </li> -->

    </ul>
    <script>

      $('.a_ad_list').find('li').find('.a_ad_tit').each(function(i){
        $(this).parent('li').hover(function(){
          if($(this).hasClass('liNow')){
            $('.a_ad_list').find('li').find('.a_ad_tit').removeClass('liNow');
            $('.a_ad_list').find('li').removeClass('liNow');
            $('.a_ad_list').find('.a_ad_txt').slideUp(300);
            }else{
              $('.a_ad_list').find('li').find('.a_ad_tit').removeClass('liNow');
              $('.a_ad_list').find('li').removeClass('liNow');
              $('.a_ad_list').find('.a_ad_txt').slideUp(300);
              $(this).addClass('liNow');
              $('.a_ad_list').find('li').eq(i).addClass('liNow');
              $('.a_ad_list').find('.a_ad_txt').eq(i).slideToggle(300);
            }
          })
        }
      )
      
    </script>
  </div>
  <script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
<script>
	$(".a_ad_list").tabso({
		cntSelect:".a_ad_pic",
		tabEvent:"mousemove",
		tabStyle:"normal"
	});
</script>


  <!-- partner -->
  <div class="i_partner_box wrap2 wow slideInUp" style="margin-top: .7rem;">
    <div class="i_partner">
      <div class="i_partner_list swiper-container">
        <ul class="swiper-wrapper">
        <?php
              $i_part = xintheme('i_part');
              if($i_part){
              foreach($i_part as $value):
            ?>
            <li class="swiper-slide">
              <div class="img">
                <img class="usually" src="<?php echo $value['i_part_img'] ?>" />
                <img class="active" src="<?php echo $value['i_part_active'] ?>" />
              </div>
            </li>
            <?php endforeach; } ?>

        </ul>				
      </div>
      <div class="pt-pagination"></div>
      <div class="pt-button-next"></div>
      <div class="pt-button-prev"></div>
    </div>
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
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1
        },
        768: {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 1
        },
        1200: {
        slidesPerView: 9,
        spaceBetween: 30,
        slidesPerGroup: 1
        }
      }
    });
  </script>



  <!-- history -->
  <div class="a_h delta_t delta_b box_mg">
    <p class="i_com_tit wow slideInUp">development history</p>
    <div class="a_h_box wow slideInUp" data-wow-delay=".3s">
      <div class="a_h_banner">
        <div class="swiper-container">
            <ul class="swiper-wrapper">

              <?php
                $history = xintheme('history');
                if($history){
                foreach($history as $value):
              ?>
              <li class="swiper-slide">
                <div class="txt">
                  <p class="event"><?php echo $value['history_cont'] ?></p>
                  <h5 class="stress_f"><?php echo $value['history_year'] ?></h5>
                </div>
              </li>
              <?php endforeach; } ?>

              
              <!-- <li class="swiper-slide">
                <div class="txt">
                  <p class="event">Laminated borosilicate microfiber Skynet ™ High-efficiency enzyme bacteriolytic mesh filter was born</p>
                  <h5>1988</h5>
                </div>
              </li> -->
            </ul>
            <div class="banner-button-prev">Prev</div>
            <div class="banner-button-next">Next</div>
            <div class="banner-pagination"></div>
        </div>
      </div>
      <script>
        var banner_swiper = new Swiper('.a_h_banner .swiper-container',{
          speed: 600,
          loop:true,
          // autoplay: {
          // 	delay: 4000,
          // 	stopOnLastSlide: false,
          // 	disableOnInteraction: false,
          // },
          navigation: {
            nextEl: '.banner-button-next',
            prevEl: '.banner-button-prev',
          },
          pagination: {
            el: '.banner-pagination',
            clickable: true,
          },
          breakpoints: {
              0: {
                slidesPerView: 1,
                spaceBetween: 0,
                slidesPerGroup: 1,
              },
              560: {
                slidesPerView: 3,
                spaceBetween: -40,
                slidesPerGroup: 1,
              },
            },
        });
      </script>
    </div>
  </div>



  <!-- ---荣誉证书 -->
  <div class="a_ho_box box_mg wrap2">
    <p class="i_com_tit wow slideInUp">honor</p>
    <div class="circle_bc"></div>
    <div class="a_ho_banner wow slideInUp" data-wow-delay=".4s">
      <div class="swiper-container">
          <ul class="swiper-wrapper">


            <?php
                $honor = xintheme('honor');
                if($honor){
                foreach($honor as $value):
              ?>
              <li class="swiper-slide">
                <div class="txt">
                  <div class="img"><img src="<?php echo $value['honor_pic'] ?>" alt=""></div>
                  <p class="event"><?php echo $value['honor_tit'] ?></p>
                </div>
              </li>
              <?php endforeach; } ?>

            <!-- <li class="swiper-slide">
              <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/honor1.jpg" alt=""></div>
              <p>AHAM VERIFIDE Independently TestedConsumer Trusted</p>
            </li> -->
          </ul>
          <div class="banner-button-prev"></div>
          <div class="banner-button-next"></div>
          <p class="ah_slide">slide</p>
          <div class="banner-pagination"></div>
      </div>
    </div>
    <script>
      var banner_swiper = new Swiper('.a_ho_banner .swiper-container',{
        speed: 600,
        // loop:true,
        // autoplay: {
        // 	delay: 4000,
        // 	stopOnLastSlide: false,
        // 	disableOnInteraction: false,
        // },
        navigation: {
          nextEl: '.a_ho_banner .banner-button-next',
          prevEl: '.a_ho_banner .banner-button-prev',
        },
        pagination: {
          el: '.a_ho_banner .banner-pagination',
          type: "progressbar",
          clickable: true,
        },
        breakpoints: {
            0: {
              slidesPerView: 2,
              spaceBetween: 20,
              slidesPerGroup: 1,
            },
            959: {
              slidesPerView: 4,
              spaceBetween: 30,
              slidesPerGroup: 1,
            },
          },
      });
    </script>
  </div>
</main>


<?php get_footer(); ?>


</body>
</html>
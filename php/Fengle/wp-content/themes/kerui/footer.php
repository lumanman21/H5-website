
<!-- footer -->
<footer>
  <div class="afooter">
    <!-- 底部导航栏 -->
    <div class="cd_bottom_header" id="cd_bottom_header">
      <ul class="list foot_list">
      <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
        <!-- <li class="list_txt">
          <a href="/"><p>HOME</p></a>
        </li>
        <li class="">
          <a href="/"> <p>PRODUCTS</p></a>
        </li>
        <li>
          <a href="/"><p>ABOUT US</p></a>
        </li>
        <li>
          <a href="/"><p>SOLUTION</p></a>
        </li>
        <li>
          <a href="/"><p>PROJECT</p></a>
        </li>
        <li>
          <a href="/"><p>NEWS</p></a>
        </li>
        <li>
          <a href="/"><p>CONTACT US</p></a>
        </li> -->
      </ul>
    </div>
    <!-- 底部表单地址部分 -->
    <div class="footer_content">
      <div class="left_content">
        <p class="tit">YOUR MESSAGE</p>
        <!-- <section class="input_box">
          <input type="text" placeholder="Telephone" />
          <section class="tag">
            <input type="text" placeholder="E-mail" />
          </section>
          <textarea rows="5" placeholder="Message"></textarea>
        
        </section>
        <a class="l_butt"><p>SUBMIT</p></a> -->
        <?php echo do_shortcode( ' [wpforms id="33"] ' ); ?>
      </div>
      <div class="middle_content">
        <p class="tit">CONTACT US</p>
        <div class="line1">
          <i class="iconfont icon-24gf-phoneLoudspeaker"></i>
          <span>Tel:</span>
          <a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a>
          <!-- <a href="">0551-65568275</a> -->
        </div>
        <div class="line2" id="line2">
          <i class="iconfont icon-youxiang"></i>
          <span>E-mail:</span>
          <!-- <a>info@coolnetpower.com</a> -->
          <a><?php echo xintheme('email1'); ?></a>
        </div>
        <div class="line3">
          <p class="icon_1"><i class="iconfont icon-daohangdizhi"></i></p>
          <p class="icon2">
            <span>Address :</span>
            <span><?php echo xintheme('address'); ?></span>
          </p>
        </div>
      </div>
      <div class="right_content">
        <p class="tit">PRODUCT</p>
        <ul id="right_content">
          <!-- <li>Precision Air Conditioning Unit</li>
          <li>NeegaQA mainNavLiA</li>
          <li>Uninterrupted Power Supply UPS</li>
          <li>Power Supply for Telecom</li>
          <li>Energy Storage</li> -->
          <?php
        $categories=get_categories("child_of=4&parent=4&hide_empty=0&orderby=id&order=asc");
        foreach($categories as $category) {
                $category_data = get_term_meta( $category->term_id, 'category_options', true );
                echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';        
        }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="bfooter">
    <div class="bfooter_tit">
      <div class="bfooter_tit_left">
        <a href="">
          <img
            src="https://img.bjyyb.net/sites/70000/70446/20220506135949840.png"
            alt=""
        /></a>
      </div>
      <div class="bfooter_tit_right">
        <p>FOLLOW US :</p>
        <a href="/">
          <img
            src="<?php bloginfo('template_url'); ?>/static/img/bfooter_1.png"
            alt=""
          />
        </a>
        <a href="/">
          <img
          src="<?php bloginfo('template_url'); ?>/static/img/bfooter_2.png"
            alt=""
          />
        </a>
        <a href="/">
          <img
          src="<?php bloginfo('template_url'); ?>/static/img/bfooter_3.png"
            alt=""
          />
        </a>
        <a href="/">
          <img
          src="<?php bloginfo('template_url'); ?>/static/img/bfooter_4.png"
            alt=""
          />
        </a>
      </div>
    </div>
    <div class="bfooter_content">
      <div class="bfooter_txt">
        <div class="txt">
          <span><a href="<?php echo get_permalink(151); ?>" class="Privacy">Privacy Policy</a></span><br />
          <p><?php echo xintheme('footer_cont');?></p>
          <span>©2022 Hefei Coolnet Power Co.,Ltd.</span>
          <span>Design by LJGLOBAL.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="cfooter_phone">
    <a href="./index.html" class="home">
      <p class="home_icon">
        <i class="iconfont icon-shouye"></i>
        <span>Home</span>
      </p>
    </a>
    <a href="./product.html" class="product">
      <p class="product_icon">
        <i class="iconfont icon-caidan"></i>
        <span>Product</span>
      </p>
    </a>
    <a href="./contactus.html" class="contact">
      <p class="contact_icon">
        <i class="iconfont icon-24gf-phoneLoudspeaker"></i>
        <span>Contact</span>
      </p>
    </a>
  </div>
  <!-- 回到顶部 -->
  <div class="sidebar">
    <a href="tel:<?php echo xintheme('phone1'); ?>">
      <p class="fix_icon"><i class="iconfont icon-outBound-hujiao"></i></p>
      <div class="side_icon">
        <i class="iconfont icon-outBound-hujiao"></i>
        <span><?php echo xintheme('phone1'); ?></span>
      </div>
    </a>
    <a href="javascript:;">
      <p class="fix_icon"><i class="iconfont icon-youxiang"></i></p>
      <div class="side_icon">
        <i class="iconfont icon-youxiang"></i>
        <span id="Email">E-mail: info@coolnetpower.com</span>
      </div>
    </a>
    <a href="javascript:;" onClick="goTop()" class="back-top">
      <i class="iconfont icon-shuangjiantoushang"></i>
    </a>
  </div>
</footer>

    <script>
    function goTop() {
      $('html,body').animate({
              scrollTop: 0
      }, 500)
    }
    </script>

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper-bundle.min.js"></script>
    <script>
      //轮播图
      var swiper = new Swiper(".home_swiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      
    </script>


    <!-- email 表单 -->
   <div class="spc_form">
        <div class="contact_send spc_189 spc_inquer" style="margin: 0 auto;">
            <i class="tc_from_close"></i>
            <p>Free to contact us</p>
            <?php echo do_shortcode( ' [wpforms id="41"] ' ); ?>
        </div>
    </div>
    <script>
        $('#line2').click(function(){
            $('.spc_form').css('display','block')
        });
        $('#Email').click(function(){
            $('.spc_form').css('display','block')
        });
        $('.product_btn a:eq(0)').click(function(){
            $('.spc_form').css('display','block')
        });
        $('.tc_from_close').click(function(){
            $('.spc_form').css('display','none')
        })
    </script>

    

<?php echo xintheme('foot_code');?>
<?php wp_footer(); ?>
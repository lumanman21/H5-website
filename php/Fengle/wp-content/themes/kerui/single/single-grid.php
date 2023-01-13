<?php
get_header(); 
$category = get_the_category();
if($category[0]){
    $catid = $category[0]->term_id;
} 
$category_data = get_term_meta( $catid, 'category_options', true );
$post_extend = get_post_meta( get_the_ID(), 'extend_info', true );
$no_sidebar	= isset($post_extend['no_sidebar']) ?$post_extend['no_sidebar'] : '';
$no_sidebar_all = xintheme('post_no_sidebar_all');
?>
<?php
   $this_category = get_the_category();
   $category_id = $this_category[0]->cat_ID;
?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/product.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/common/style.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/adapt.css" />

<body>

<!-- header -->
<?php get_template_part('top') ?>

<!-- P_content1 -->
<div class="P_content1">
  <div class="img_txt wrap">
    <h1 class="conten1_tit">PRODUCTS</h1>
    <p class="content_fu">
      <span class="content_fu1">COOLNET--</span><span>Products Center</span>
    </p>
  </div>
</div>


<!-- 小图标 -->
<div class="in_position wrap">
  <div class="container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>


<!-- P_D_conent2 -->
<div class="P_D_conent2 wrap">
  <!-- 题目部分 -->
  <p class="P_D_content2_tit"><?php the_title_attribute(); ?></p>
  <!-- 内容 -->
  <div class="P_D_content2_container">
    <!-- 左边的下拉部分 -->
    <div class="P_D_con2_left">
      <ul id="fold_nav" class="fold_nav">
        <li>
          <a class="tit_line" href="#">PRODUCT LIST</a>
        </li>
        <?php
          $pterms=get_categories("child_of=4&parent=4&hide_empty=0&orderby=id&order=asc");
          
         // 循环输出分类
				foreach ($pterms as $pterm) {
					$pposts = get_posts(array('cat' => $pterm->term_id, 'post_type' => 'post', 'numberposts' => '8'));
					$category_data = get_term_meta( $pterm->term_id, 'category_options', true );
					echo '<li>';
					echo '<a href="' . get_term_link($pterm) . '">' . $pterm->name . '</a>';
					echo '<i class="switch"></i>';
          echo '<dl  class="submenu"> ';
					/* 循环输出文章列表 */
					foreach ($pposts as $ppost) {
						echo '<dt>';
						echo '<a href="' . get_the_permalink($ppost) . '"><i class="black"></i>' . get_the_title($ppost) . '</a>';
						echo '</dt>';
					}
					unset($ppost);
					echo '</dl></li>';
				}
				unset($pterm);
        ?>
      </ul>
    </div>
    <!-- 中间的图片部分 -->
    <div class="P_D_con2_middle">
      <div class="img_container">
            <!-- 图片查看区 -->
            <div id="MagnifierWrap2">
              <div class="MagnifierMain">
              <?php
                $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
                $produc_img =  $post_meta['produc_img'];
                $produc_img = explode( ',', $post_meta['produc_img'] );
                $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
              ?>
                <img class="MagTargetImg" src="<?php echo $produc_img_src[0];?>" data-src="<?php echo $produc_img_src[0];?>" />
              </div>
              <span class="spe_leftBtn"></span>
              <span class="spe_rightBtn"></span>
              <div class="spec-items">
                <ul>
                  <?php
                    $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
                    $produc_img =  $post_meta['produc_img'];
                  ?>
                  <?php
                    if( !empty( $produc_img ) ) :
                    $produc_img = explode( ',', $post_meta['produc_img'] );
                    foreach ( $produc_img as $id ) :
                    $produc_img_src = wp_get_attachment_image_src( $id, 'full' );
                  ?>
                    <li >
                    <img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
                    </li>
                    <?php endforeach;endif ?>
                </ul>
              </div>
            </div>
          </div>
      </div>
    <!-- 右边的文字部分 -->
    <div class="P_D_con2_right">
      <p class="tit">Product introduction:</p>
      <p class="txt">
        <?php the_content(); ?>
      </p>
      <div class="but">
        <p id='INQUIRE'>INQUIRE</p>
        <i class="iconfont icon-xiangyou1"></i>
      </div>
    </div>
  </div>
</div>

<!-- P_D_content3 -->
<div class="P_D_content3 wrap">
  <div class="line1_left_img">
    <div class="left_img">
      <img src="<?php $yfl= get_post_meta($post->ID, 'extend_info', true);  echo $yfl['produc_imge']; ?>" alt="" />
    </div>
    <div class="left_img" >
      <img id="left_img" src="<?php $yfl= get_post_meta($post->ID, 'extend_info', true);  echo $yfl['produc_imgf']; ?>" alt="" />
    </div>
  </div>
  <div class="line1_right_txt">
    <p class="tit">Features:</p>
    <article><?php  echo get_post_meta($post->ID , 'tuzhi_value', true); ?></article>
    <!-- <p class="line_tit">Rapid deployment</p>
    <p class="line1">•Pre-installed, pre-connected, pre-integrated, plug and play.</p>
    <p class="line1">
      •Pre-installed enterprise application APP, menu-based selection, one-stop delivery, rapid
      business launch.
    </p>
    <p class="line1">
      •Integrate Computer room infrastructure (air conditioner, UPS , battery, power
      distribution, monitoring, etc.), IT infrastructure (server, storage, network), cloud
      platform (virtualized cloud security components, multi-cloud management).
    </p>
    <p>&nbsp;</p>
    <p class="line_tit">Energy saving and high efficiency</p>
    <p class="line1">
      Efficient power supply and distribution, cooling close to the heat source, effectively
      reducing the PUE value of the module, isolating cold and hot air flow, eliminating
      ineffective air circulation and eliminating local hot spots Through integrated management
      of modules, coordinated operation and improved performance of functional components.
    </p>
    <p>&nbsp;</p>
    <p class="line_tit">On-demand expansion</p>
    <p class="line1">
      •Standardized, modular and integrated design, saving 30% of construction cost. Cabinet
      expansion is as simple as building blocks, and computing power grows as needed.
    </p>
    <p class="line1">
      •Software-defined infrastructure, excellent resource elastic scalability.
    </p>
    <p class="line1">
      •Meet business elastic scaling requirements and save 40% of initial investment.
    </p>
    <p>&nbsp;</p>
    <p class="line_tit">Simple operation and maintenance</p>
    <p class="line1">
      • Centralized monitoring of computer room infrastructure, IT infrastructure and cloud
      platform. Multi-cloud management of physical and virtual resources.
    </p>
    <p class="line1">
      • Automatic fault location, automatic isolation, efficient operation and maintenance.
    </p>
    <p class="line1">•24-hour active inspection, cloud service support.</p> -->
  </div>
</div>

<!-- 判断是否有第二章图片 -->
<script>
        $(document).ready(function(){
        $('#left_img[src=""]').hide();
        $('#left_img:not([src=""])').show();
    });
 </script>


<!-- P_D_content4 -->
<div class="P_D_content4 wrap">
  <div class="P_D_content4_box">
    <div class="line2_left_txt">
      <p class="tit">Advantage:</p>
      <article><?php  echo get_post_meta($post->ID , 'canshu1_value', true); ?></article>
      <!-- <p class="line2">
        The Aisle Containment System modular data center is an intelligent thermal containment
        solution designed to increase cooling system efficiency while protecting critical IT
        equipment and personnel.
      </p>
      <p>&nbsp;</p>
      <p class="line2">
        Power supply and distribution architecture, close to heat source cooling methods,
        effectively reduce the module PUE value.
      </p>
      <p>&nbsp;</p>
      <p class="line2">
        The modular design enables the company to match and expand rapidly according to the
        needs of business development.
      </p> -->
    </div>
    <div class="line2_right_img">
      <div class="r_img">
        <img src="<?php $yfl= get_post_meta($post->ID, 'extend_info', true);  echo $yfl['produc_imgj']; ?>" alt="" />
      </div>
    </div>
  </div>
  <div class="P_D_content4_box">
    <div class="line2_left_txt">
      <p class="tit">Applications:</p>
      <article><?php  echo get_post_meta($post->ID , 'canshu2_value', true); ?></article>
      <!-- <p class="line2_tit">Single module solution:</p>
      <p class="line2">
        It is suitable for small and medium-sized data centers with a total power consumption of
        less than 120kW and an area of less than 100 square meters. Meet the small and large
        enterprise data center needs.
      </p>
      <p>&nbsp;</p>
      <p class="line2_tit">Multi-module solution:</p>
      <p class="line2">
        Through multiple module layout replication, flexible and rapid deployment, to build
        large data centers. For the needs of large data centers in IDC, large enterprises,
        financial centers, governments, military, supercomputing centers, education, medical and
        other industries
      </p> -->
    </div>
    <div class="line2_right_img">
      <div class="r_img b_img">
        <img src="<?php $yfl= get_post_meta($post->ID, 'extend_info', true);  echo $yfl['produc_imgh']; ?>" alt="" />
      </div>
    </div>
  </div>
</div>

<!-- P_D_content5 -->
<div class="P_D_content5 wrap">
  <table border="1" cellspacing="0" cellpadding="0">
    <tbody>
    <article><?php  echo get_post_meta($post->ID , 'canshu3_value', true); ?></article>
      <!-- <tr class="firstRow" align="center">
        <td colspan="3" align="center">
          <strong>SPECIFICATIONS</strong>
        </td>
      </tr> -->

      <!-- <tr align="center">
        <td><strong>Equipment System</strong></td>
        <td>Item</td>
        <td>Parameter</td>
      </tr>

    </tbody>
  </table>
</div>
<!-- P_D_content6 -->
<div class="P_D_content6 wrap">
  <p class="tit">Leave A Message</p>
  <p class="futit">
    If you are interested in our products and want to know more details, please leave a message
    here, we will reply you as soon as we can.
  </p>
  <!-- <section>
    <input type="text" placeholder="Modular  Data Center" value="100Kw Precision Air Conditioners For Communication Base Stations "></input>
  </section> -->
  <?php echo do_shortcode( ' [wpforms id="138"] ' ); ?>
  <!-- <section>
    <input type="email" placeholder="E-mail" />
  </section>
  <section>
    <textarea
      cols="100"
      rows="4"
      placeholder="Enter product details and other speciffic requirements to receive an accurate quote."
    ></textarea>
  </section>
  <a href="#" class="but"><p>SUBMIT</p></a> -->
</div>


<!-- email 表单 -->
<div class="spc_form">
  <div class="contact_send spc_189 spc_inquer" style="margin: 0 auto;">
    <i class="tc_from_close"></i>
    <p>Free to contact us</p>
    <?php echo do_shortcode( ' [wpforms id="41"] ' ); ?>
  </div>
</div>

<script>
    $('#INQUIRE').click(function(){
        $('.spc_form').css('display','block')
    });
    $('.tc_from_close').click(function(){
        $('.spc_form').css('display','none')
    })
</script>



<script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/magnifier.js"></script>





<!-- footer -->
<?php get_footer();?>




</body>
</html>
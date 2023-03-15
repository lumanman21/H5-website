<header>
  <div class="wrap pr" style="height: 100%">
    <div class="logo">
      <a href="/"><img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>"></a>
    </div>
    <nav class="cd-primary-nav">
      <div class="m_menu">
        <img class="m_open" src="<?php bloginfo('template_url'); ?>/static/images/ico_menu.svg" alt="">
        <img class="m_back" src="<?php bloginfo('template_url'); ?>/static/images/ico_cha_bai.svg" alt="">
      </div>
      <ul id="cd-navigation">
        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
      </ul>
    </nav>
    
    <div class="top_r">


      <!-- search -->
      <div class="top_search_ico"><i></i></div>
      <div class="top_search">
        <form role="search" method="get" action="/">
          <input class="top_search_ipt" type="text" placeholder="Search" name="s" id="s" />
          <input class="top_search_btn" type="submit" value=""   />
        </form>
      </div>


      <!-- language -->
      <ul class="top_language">
        <i></i>
        <li class="menu-item menu-item-has-children">
          <ul class="sub-menu">
            <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
          </ul>
        </li>
      </ul>
      
      

    </div>
  </div>


    <!-- dropnav -->
    <div class="dropnav_box" id="dropnav_box">
      <div class="dropnav">
        <div class="left_d">
          <h5>series</h5>
          <ul class="drop_list">
            <?php
              $categories=get_categories("child_of=2&parent=2&hide_empty=0&orderby=id&order=asc");
              foreach($categories as $category) {
                $category_data = get_term_meta( $category->term_id, 'category_options', true );
                echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';	
              }
            ?>
          </ul>
        </div>
        <div class="right_d">
          <h5>Recommended products</h5>
          <ul class="drop_p_list">

          <?php
                  $query_post = array(
                    'cat' => 2,
                    'showposts' => 3,
                    'post__in' => get_option('sticky_posts'),
                    'caller_get_posts' => 1,
                    // 'order' => 'asc',
                  );
                  query_posts($query_post);
          ?>
          <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>">
                  <div class="img">
                    <?php
                        $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
                        $produc_img =  $post_meta['produc_img'];
                        $produc_img = explode( ',', $post_meta['produc_img'] );
                        $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
                      ?>
                        <img src="<?php echo $produc_img_src[0];?>" />
                  </div>
                  <p><?php the_title();?></p>
                </a></li>
                <?php endwhile; wp_reset_query(); ?>
            <!-- <li><a href="">
              <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/p1.jpg" alt=""></div>
              <p>p1500</p>
            </a></li> -->
            
            
          </ul>
        </div>
      </div>
    </div>
</header>

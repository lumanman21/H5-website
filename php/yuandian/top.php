<header>
  <div class="wrap pr" style="height: 100%">
    <div class="logo">
      <a href="/" class="pc_logo"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="Logo" /></a>
      <a href="/" class="mobile_logo"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="Logo" /></a>
    </div>
    <nav class="cd-primary-nav">
      <a href="#" class="nav-trigger">
        <span><em aria-hidden="true"></em></span>
      </a>
      <ul id="cd-navigation">
        <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
        <!-- <li class="nav_on"><a href="#">HOME</a></li>
        <li><a href="./about.html">ABOUT US</a></li>
        <li class="morenav_li"><a href="./product.html">PRODUCTS</a></li>
        <li><a href="./news.html">NEWS</a></li>
        <li><a href="#">SUPPORT</a></li>
        <li><a href="./contact.html">CONTACT US</a></li> -->
      </ul>
    </nav>
    
    <div class="top_r">

      <!-- 语言切换 -->
      <ul class="top_language">
        <i></i>
        <li class="menu-item menu-item-has-children">
          <ul class="sub-menu">
            <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
            
            <!-- <li class="menu-item">
              <a href="http://lj102.com/as/">
                <span data-no-translation>
                  <img
                    class="trp-flag-image"
                    src="http://lj102.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/as.png"
                    width="18"
                    height="12"
                    alt="as"
                    title="Assamese"
                  />
                  <span class="trp-ls-language-name">AS</span>
                </span>
              </a>
            </li> -->
          </ul>
        </li>
      </ul>
      
      <!-- 搜索 -->
      <div class="top_search_ico"><i></i></div>
      <div class="top_search">
        <form role="search" method="get" action="/">
          <input class="top_search_ipt" type="text" placeholder="Search" name='s' id='s' />
          <input class="top_search_btn" type="submit" value="search" />
        </form>
      </div>

    </div>
  </div>
  
  <!-- more product -->
  <div id="dropli">
    <div class="triangle"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_triangle.svg" alt=""></div>
    <div class="dropli_box">
      <ul class="drop_product wrap" >


      <?php
          $pterms=get_categories("child_of=2&parent=2&hide_empty=0&orderby=id&order=asc");
          
          foreach ($pterms as $pterm) {
            $pposts = get_posts(array('cat' => $pterm->term_id, 'post_type' => 'post'));
            $category_data = get_term_meta( $pterm->term_id, 'category_options', true );
            $category_des = category_description($pterm->term_id);
            echo '<li>';
            echo '<a href="' . get_term_link($pterm) . '" title="'. $pterm->name .'">';
            echo '<div class="img" id="img"><img src="'.$category_data['cat_slt'].'" alt="'. $pterm->name .'"></div>';
            echo '<p>' . $pterm->name . '</p>';
            echo '</a>';
            echo '</li>';
          }
          unset($pterm);
          ?>



      </ul>
    </div>
  </div>
</header>


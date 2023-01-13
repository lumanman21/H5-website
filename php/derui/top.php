<header class="cd-auto-hide-header">
  <div class="pr" style="height: 100%">
    <div class="logo">
      <a href="/"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="Logo" /></a>
    </div>
    <nav class="cd-primary-nav">
      <a href="#" class="nav-trigger">
        <span><em aria-hidden="true"></em></span>
      </a>
      <ul id="cd-navigation">
        <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

        <!-- <li><a href="#">Home</a></li>
        <li class="more_menu">
          <a href="./product.html">Products & application</a>
        </li>
        <li><a href="./about.html">About Us</a></li>
        <li><a href="./new.html">news</a></li>
        <li><a href="./contact.html">Contact Us</a></li> -->
      </ul>
    </nav>
    <div class="top_r">
      <!-- 语言切换 -->
      <ul class="top_language">
        <i></i>
        <li class="menu-item menu-item-has-children">
          <ul class="sub-menu">
           <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
          </ul>
        </li>
      </ul>

      <!-- 搜索 -->
      <div class="top_search_ico"><i></i></div>
      <div class="top_search">
        <form role="search" method="get" action="/">
          <input class="top_search_ipt" type="text" placeholder="Search" name="s" id="s" />
          <input class="top_search_btn" type="submit" value=""   />
        </form>
      </div>
    </div>
    <div class="cd_contact"><a href="<?php echo get_permalink(7); ?>"><p>contact us</p></a></div>
  </div>
  <div class="xiala_content">
    <ul class="xiala">
      <li><a href="/category/products-application/#box_a">Know about carbon black</a></li>
      <li>
        <a href="<?php echo get_category_link(6); ?>#box_b"><?php echo get_cat_name(6); ?></a>
        <ul class="more_xiala">
        
          <?php
              $categories=get_categories("child_of=6&parent=6&hide_empty=0&orderby=id&order=asc");
              foreach($categories as $category) {
                $category_data = get_term_meta( $category->term_id, 'category_options', true );
                echo '<li><a href="/category/products-application/#box_b"">'.$category->name.'</a></li>';	
              }
            ?>

  
          <!-- <li><a href="#">Coatings</a></li>
          <li><a href="#">Inks</a></li>
          <li><a href="#">Plastics</a></li>
          <li><a href="#">Others</a></li> -->
        </ul>
      </li>
      <li><a href="/category/products-application/#box_c"><?php echo get_cat_name(12); ?></a></li>
      <li><a href="<?php echo get_category_link(5); ?>#box_d"><?php echo get_cat_name(5); ?></a></li>
    </ul>
  </div>
</header>
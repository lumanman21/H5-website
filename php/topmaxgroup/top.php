<header class="cd-auto-hide-header">
  <div class="pr" style="height: 100%">
    <div class="logo">
      <a href="/" class="pc_logo"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.webp" alt="Logo" /></a>
      <a href="/" class="mobile_logo"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.webp" alt="Logo" /></a>
    </div>
    <nav class="cd-primary-nav">
      <a href="#" class="nav-trigger">
        <span><em aria-hidden="true"></em></span>
      </a>
      <ul id="cd-navigation">
      <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

        <!-- <li class="nav_on"><a href="#">Home</a></li>
        <li class="more_menu">
          <a href="./product.html">Product</a>
          <ul class="n_submenu" >
            <li><a href="single.html">Quality</a></li>
            <li><a href="single.html">Video</a></li>
          </ul>
        </li>
        <li><a href="./about.html">About Us</a></li>
        <li class="more_menu">
          <a href="./news.html">Blog</a>
          <ul class="n_submenu">
            <li><a href="single.html">company news</a></li>
          </ul>
        </li>
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
  </div>
</header>

<header>
  <div class="top_header">
    <div class="top_innerwrap">
      <a href="/" class="left_img">
        <img src="<?php bloginfo('template_url'); ?>/static/images/logo.webp"alt=""/>
      </a>

      <div class="sousuo_content">
        <form class="sousuo_inner" role="search" method="get" action="/">
          <input type="text" placeholder="Search starts here" name="s" id="s" />
          <input class="search_input" type="submit" value="">
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

  <div class="top_header_phone">
    <a href="/" class="left_img imgbox">
      <img src="<?php bloginfo('template_url'); ?>/static/images/logo.webp"alt=""/>
    </a>
    <div class="right_more">
      <div class="sousuo_content">
        <form class="sousuo_inner" role="search" method="get" action="/">
          <input type="text" placeholder="Search starts here" name="s" id="s" />
          <input class="search_input" type="submit" value="">
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
      
      <img class="phone_more" src="<?php bloginfo('template_url'); ?>/static/images/ico_menu.svg" alt="">
    </div>
  </div>


  <div class="bottom_header">
    <ul class="list wrap">
      <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
    </ul>
  </div>

  <div class="phone_menu">
    <div class="menu_bar">
      <p class="back_page"><img id="back_page" src="<?php bloginfo('template_url'); ?>/static/images/ico_cha.svg" alt=""></p>
      <ul class="list">
        <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
      </ul>
    </div>
  </div>
</header>
<header class="cd-auto-hide-header">
  <div class="wrap pr" style="height: 100%">
    <div class="logo">
      <a href="/" class="pc_logo"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.webp" alt="Logo" /></a>
      <a href="/" class="mobile_logo"><img src="<?php bloginfo('template_url'); ?>/static/images/phone_logo.webp" alt="Logo" /></a>
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
          <dl class="n_submenu" >
            <dt><a href="single.html">Quality Certification</a></dt>
            <dt><a href="single.html">Video</a></dt>
          </dl>
        </li>
        <li class="more_menu">
          <a href="./about.html">About Us</a>
          <dl class="n_submenu" >
            <dt><a href="single.html">CBB65 AC Motor Capacitor</a></dt>
            <dt><a href="single.html">CBB60 Pump Capacitor</a></dt>
            <dt><a href="single.html">CBB61 Fan Capacitor</a></dt>
            <dt><a href="single.html">CH85 Microwave Oven Capacitor</a></dt>
            <dt><a href="single.html">CD60 Starting Capacitor</a></dt>
            <dt><a href="single.html">Reticulate-MPP Capacitor</a></dt>
            <dt><a href="single.html">Self-Healing Low Voltage Shunt Power Capacitor</a></dt>
            
          </dl>
        </li>
        <li class="more_menu">
          <a href="./news.html">News</a>
          <dl class="n_submenu" >
            <dt><a href="single.html">Quality Certification</a></dt>
            <dt><a href="single.html">Video</a></dt>
          </dl>
        </li>
        <li><a href="./contact.html">Contact Us</a></li> -->
      </ul>
    </nav>
    
    <div class="top_r">
     
      <!-- 搜索 -->
      <div class="top_search_ico"><i></i></div>
      <div class="top_search">
      <form role="search" method="get" action="/">
        <input class="top_search_ipt" type="text" placeholder="Search" name="s" id="s" />
        <input class="top_search_btn" type="submit" value=""   />
      </form>
    </div>

     <!-- 语言切换 -->
     <ul class="top_language">
        <i></i>
        <li class="menu-item menu-item-has-children">
          <ul class="sub-menu">
            <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
            <!-- <li class="menu-item">
              <a href="http://lj102.com/en/">
                <span data-no-translation>
                  <img
                    class="trp-flag-image"
                    src="http://lj102.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_US.png"
                    width="18"
                    height="12"
                    alt="en_US"
                    title="English"
                  />
                  <span class="trp-ls-language-name">EN</span>
                </span>
              </a>
            </li> -->
          </ul>
        </li>
      </ul>

  </div>
</header>
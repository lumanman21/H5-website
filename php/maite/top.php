
<header class="cd-auto-hide-header">
  <div class="wrap pr" style="height: 100%">
    <div class="logo">
      <a href="/"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="Logo" /><img src="<?php bloginfo('template_url'); ?>/static/images/logo_bai.webp" alt=""></a>
    </div>
    <nav class="cd-primary-nav">
      <a href="#cd-navigation" class="nav-trigger">
        <span><em aria-hidden="true"></em></span>
      </a>
      <ul id="cd-navigation">
          <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
        <!-- <li class="nav_on"><a href="#">Home</a></li>
        <li class="more_menu">
          <a href="/About.html">About Us</a>
          <dl class="n_submenu" >
            <dt><a href="single.html">Quality Certification</a></dt>
            <dt><a href="single.html">Video</a></dt>
          </dl>
        </li>
        <li class="more_menu">
          <a href="/Products.html">Product</a>
          <dl class="n_submenu" >
            <dt><a href="single.html">CBB65 AC Motor Capacitor</a></dt>
            <dt><a href="single.html">CBB60 Pump Capacitor</a></dt>
            <dt><a href="single.html">CBB61 Fan Capacitor</a></dt>
            <dt><a href="single.html">CH85 Microwave Oven Capacitor</a></dt>
            <dt><a href="single.html">CD60 Starting Capacitor</a></dt>
            <dt><a href="single.html">Reticulate-MPP Capacitor</a></dt>
            <dt>
              <a href="single.html">Self-Healing Low Voltage Shunt Power Capacitor</a>
            </dt>
            <dt>
              <a href="single.html">Speical Capacitor for Welding Machine</a>
            </dt>
          </dl>
        </li>
        <li><a href="/News.html">News</a></li>
        <li><a href="/Global.html">Global Agent </a></li>
        <li><a href="/Equipment .html">Equipment </a></li>
        <li><a href="/Contact.html">Contact Us</a></li> -->
      </ul>
    </nav>
    <script>
        $(function(){
          $('#cd-navigation>li').hover(function(){
            $(this).children('ul').stop().slideToggle()
          })
        })
    </script>
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
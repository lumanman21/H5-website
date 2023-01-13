<header>
  <div class="wrap pr" style="height: 100%">
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

        <!-- <li><a href="/">Home</a></li>
        <li><a href="./about.html">About Us</a></li>
        <li>
          <a href="./product.html">Products & Applications</a>
          <ul class="n_submenu" >
            <li>
              <a href="#">Products</a>
              <ul>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Applications</a>
              <ul>
                <li><a href="#">Sponge City</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
                <li><a href="#">Light Duty Dewatering Truck</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="./rent.html">Rent</a></li>
        <li><a href="./service.html">Service & Support</a></li>
        <li><a href="./case.html">Cases</a></li>
        <li><a href="./news.html">News</a></li> -->
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
              <a href="#">
                <span data-no-translation>
                  <img
                    class="trp-flag-image"
                    src="http://lj102.com/wp-content/plugins/translatepress-multilingual/assets/images/flags/zh_CN.png"
                    width="18"
                    height="12"
                    alt="zh_CN"
                    title="Chinese"
                  />
                  <span class="trp-ls-language-name">ZH_CN</span>
                </span>
              </a>
            </li>
            <li class="menu-item">
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
      

      
    </div>
  </div>
</header>
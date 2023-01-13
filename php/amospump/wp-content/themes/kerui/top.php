
<header>
  <!--头部图标部分web -->
  <div class="top_header">
    <div class="top_innerwrap">
      <a class="left_img" href="/">
        <img
          src="https://hkimg.bjyyb.net/sites/70000/70446/20220506094205621.png@!w800"
          alt=""
        />
      </a>

      <!-- 网页端显示的图标 -->
      <!-- 搜索框 -->
      <div class="sousuo_content">
        <form class="sousuo_inner" role="search" method="get" action="/">
          <input type="text" placeholder="Search starts here" name="s" id="s" />
          <input class="search_input" type="submit" value=""></input>
        </form>
      </div>

    
      <!-- 语言切换 -->
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

  <!-- 头部图标部分移动端 -->
  <div class="top_header_phone">
    <div class="left_img imgbox">
      <img
        src="https://hkimg.bjyyb.net/sites/70000/70446/20220506094205621.png@!w800"
        alt=""
      />
    </div>
    <!-- 菜单栏图标图标 -->
    <div class="right_more">
      <i class="iconfont icon-liebiao"></i>
    </div>
  </div>

  <!-- 头部导航栏部分 -->
  <div class="bottom_header" id="bottom_header">
    <ul class="list">
    <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
      <!-- <li class="list_txt">
        <a href="./index.html"><p>HOME</p></a>
      </li>
      <li class="moreli list_txt">
        <a href="./product.html" class="xiala">
          <p>PRODUCTS</p>
          <i class="iconfont icon-xiangxia"></i>
        </a>


        <div class="more_li_ul">
          <div class="item">
            <a href="">Precision Air Conditioning Unit</a>
          </div>
          <div class="item"><a href="">Data Center Solution</a></div>
          <div class="item">
            <a href="">Uninterrupted Power Supply UPS</a>
          </div>
          <div class="item"><a href="">Power Supply for Telecom</a></div>
          <div class="item"><a href="">Energy Storage</a></div>
        </div>


      </li>
      <li class="list_txt">
        <a href="./aboutus.html"><p>ABOUT US</p></a>
      </li>
      <li class="list_txt">
        <a href="./solutions.html"><p>SOLUTION</p></a>
      </li>
      <li class="list_txt">
        <a href="./project.html"><p>PROJECT</p></a>
      </li>
      <li class="list_txt">
        <a href="./news.html"><p>NEWS</p></a>
      </li>
      <li class="list_txt">
        <a href="./contactus.html"><p>CONTACT US</p></a>
      </li> -->
    </ul>
  </div>

  <!-- 移动端头部菜单栏 -->
  <div class="menu_bar">
    <div class="left">
      <a class="back_page"><i class="iconfont icon-cuo"></i></a>
      <ul class="menu_list"  id="bottom_header_ul">
      <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
        <!-- <li class="menu_txt">
          <a href="./index.html"><p>HOME</p></a>
        </li>
        <li class="menu_txt">
          <a href="./product.html"><p>PRODUCTS</p></a>
          <a class="rig_arrow"><i class="iconfont icon-xiangyou1"></i></a>
          <div class="content">
            <a>Precision Air Conditioning Unit</a>
            <a>Data Center Solution</a>
            <a>Uninterrupted Power Supply UPS</a>
            <a>Power Supply for Telecom</a>
            <a>Energy Storage</a>
          </div>
        </li>
        <li class="menu_txt">
          <a href="./aboutus.html"><p>ABOUT US</p></a>
        </li>
        <li class="menu_txt">
          <a href="./solutions.html"><p>SOLUTION</p></a>
          <a class="rig_arrow"><i class="iconfont icon-xiangyou1"></i></a>
          <div class="content">
            <a>Data center</a>
            <a>Healthcare</a>
            <a>Education</a>
            <a>Telecom</a>
            <a>Transportation</a>
            <a>Energy storage</a>
          </div>
        </li>
        <li class="menu_txt">
          <a href="./project.html"><p>PROJECT</p></a>
          <a class="rig_arrow"><i class="iconfont icon-xiangyou1"></i></a>
          <div class="content">
            <a>IDC Indonesia</a>
            <a>Telkom Indonesia</a>
          </div>
        </li>
        <li class="menu_txt">
          <a href="./news.html"><p>NEWS</p></a>
          <a class="rig_arrow"><i class="iconfont icon-xiangyou1"></i></a>
          <div class="content">
            <a>
              Beijing Winter Olympics brought a huge opportunity for
              companies of cooling industry.
            </a>
            <a href="#">
              What should we do during implementing ‘The East-to-West
              Computing Project’ in China?
            </a>
          </div>
        </li>
        <li class="menu_txt">
          <a href="./contactus.html"><p>CONTACT US</p></a>
        </li> -->
      </ul>
    </div>
    <div class="right"></div>
  </div>
  
  <script>
    $(function () {
      $("#bottom_header_ul li:eq(1)").click(function(){
          $("#bottom_header_ul li:eq(1) ul").slideToggle()
      })
    })
  </script>
  <script>
    $(function () {
      $("#menu-item-27").hover(function(){
        $("#bottom_header .sub-menu").stop().slideDown()
      },function(){
        $("#bottom_header .sub-menu").stop().slideUp()
      })
    })
  </script>
  <script>
    // 搜索 + 语言
    $(".top_search_ico").click(function () {
      event.stopPropagation();
      if($(".top_search").hasClass("on")){
        $(".top_search").removeClass("on") ;
      }else{
        $(".top_search").addClass("on") ;
      }
    });
    $(".top_search").click(function (e) {
        event.stopPropagation();
    });
    $(".top_language").click(function(){
      event.stopPropagation();
      if($(this).hasClass("on")){
        $(this).removeClass("on") ;
      }else{
        $(this).addClass("on") ;
      }
    });
    $("body").click(function (e) {
      event.stopPropagation();
      $(".top_search").removeClass("on");
      $(".top_language>li").removeClass("on");
    });
  </script>

</header>
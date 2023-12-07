<!-- header -->
<header>
	<div class="top_cont">
		<div class="top wrap">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" /></a>
			</div>

			<!-- Nav -->
			<ul class="i_nav">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
				
			</ul>

			<div class="top_r">
				<!-- Search -->
				<div class="top_search_ico"><i class="far fa-search"></i></div>
				<!-- Language -->
				<div class="top_language">
					<i class="fas fa-globe"></i>
					<div class="top_language_list">
						
						<ul class="sub-menu">
							<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
						</ul>
					</div>
				</div>
			</div>

			<!-- Mobile nav button -->
			<div class="nav_menu"><i></i></div>

		</div>
	</div>


</header>

<?php
$category_data = get_term_meta( $cat, 'category_options', true );
?>
<?php
	$category_id = $cat;
	$now_cat = get_queried_object_id();

	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接

	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>

<div class="nav_dropdown">
	<ul class="nav_p_list wrap">

	<?php
				$args=array(
				'child_of'=> 2,
				'parent' => 2,
				'hide_empty'=>'0',
				'orderby'=>'id',
				'order'=>'asc',
				);
				$categories=get_categories($args);
				foreach($categories as $category) {
					if ($category_name==$category->name)
					{
							$style1="curr";
					}else{
							$style1="";

					};
					if ($upcategory_name==$category->name)
					{
							$style2="curr";
					}else{
							$style2="";
					}
					?>
				<li class="<?php echo $style1 ?> <?php echo $style2 ?>">
					<a href="<?php echo get_category_link( $category->term_id ) ;?>">
						<h6><?php echo $category->name;?></h6>
					</a>
					<ul>
					<?php
						$argszi=array(
						'child_of'=> $category->term_id,
						'parent' => $category->term_id,
						'hide_empty'=>'0',
						'orderby'=>'id',
						'order'=>'asc',
						);
						$categorieszi=get_categories($argszi);
						foreach($categorieszi as $categoryzi) {
								if ($category_name==$categoryzi->name)
								{
										$style3="on";
								}else{
										$style3="";
								}
								echo '<li class="'.$style3.'"><a href="' . get_category_link( $categoryzi->term_id ) . '" ><p>' . $categoryzi->name.'</p><i class="fal fa-angle-right"></i></a></dt>';
							}
					?>
					</ul>
				</li>
				<?php } ?>

	</ul>
</div>

<div class="top_search">
	<form role="search" method="get" id="searchform" action="/">
		<input class="top_search_ipt" type="text" placeholder="Search" value="" name="s" id="s">
		<input class="top_search_btn" type="submit" value="search">
	</form>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/static/js/header.js"></script>

<div class="full_header"></div>
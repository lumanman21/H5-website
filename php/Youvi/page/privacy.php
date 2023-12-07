<?php
/*
Template Name: privacy
*/
?>

<?php
get_header();
?>


<!-- header -->
<?php get_template_part('top') ?>

<script>
	$('header').css('background','rgb(255 255 255 / 100%)');
</script>


<!-- main -->
<main>


	<div class="privacy_cont wrap m140">
		<div class="tit"><h2>Privacy Policy</h2></div>
		<article>
		<?php the_content(); ?>
		</article>
	</div>


</main>


</body>
</html>
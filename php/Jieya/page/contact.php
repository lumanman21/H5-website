<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="in_banner">
  <div class="img">
    <img src="<?php bloginfo('template_url'); ?>/static/images/banner_c.webp" />
  </div>
  <!-- 当前位置 -->
  <div class="in_position wow slideInUp">
    <div class="wrap container">
      <?php echo in_breadcrumbs(); ?>
    </div>
  </div>
</div>

<main>
  <section class="c_box p60">
    <div class="wrap">
      <div class="i_tit">
        <h2>CONTACT US</h2>
        <img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt="" />
      </div>
      <ul class="c_list m40">
        <li>
          <div class="c_tit">
            <div class="ico">
              <img
              src="<?php bloginfo('template_url'); ?>/static/images/c_call.png"
              alt=""
              />
            </div>
            <div class="txt">
              <h6>Call Us Today</h6>
            </div>
          </div>
          <article>
            <p>Amanda:Tel:</p>
            <a href="tel:<?php echo xintheme('tel2'); ?>" target="_blank"><?php echo xintheme('tel2'); ?></a>
            <p>Andy:Tel:</p>
            <a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
          </article>
        </li>
        <li>
          <div class="c_tit">
            <div class="ico">
              <img
              src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png"
              alt=""
              />
            </div>
            <div class="txt">
              <h6>Mail Information</h6>
            </div>
          </div>
          <article>
            <p>Amanda:E-mail:</p>
            <a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
            <p>Andy:E-mail:</p>
            <a href="mailto:<?php echo xintheme('email2'); ?>" target="_blank"><?php echo xintheme('email2'); ?></a>
          </article>
        </li>
        <li>
          <div class="c_tit">
            <div class="ico">
              <img
              src="<?php bloginfo('template_url'); ?>/static/images/c_fax.png"
              alt=""
              />
            </div>
            <div class="txt">
              <h6>Fax information</h6>
            </div>
          </div>
          <article>
            <p>Amanda: Fax:</p>
            <b><?php echo xintheme('fax'); ?></b>
            <p>Andy:Fax:</p>
            <b><?php echo xintheme('fax2'); ?></b>
          </article>
        </li>
        <li>
          <div class="c_tit">
            <div class="ico">
              <img
              src="<?php bloginfo('template_url'); ?>/static/images/c_add.png"
              alt=""
              />
            </div>
            <div class="txt">
              <h6>Our Location</h6>
            </div>
          </div>
          <article>
            <p>Address:</p>
            <b><?php echo xintheme('address'); ?></b>
          </article>
        </li>
      </ul>
      <div class="c_quote mt100 mb30">
        <div class="i_tit">
          <h2>Contact Form</h2>
        </div>
        <h6>
          we are looking forward to your inquiries about our company. You are also welcome to tell us about your experiences with our products.
        </h6>
        <?php echo do_shortcode( '[wpforms id="98"]' ); ?>
      </div>
    </div>
  </section>
  <div class="map wrap m60">
    <?php echo do_shortcode( '[simpleMapNoApi]' ); ?>
  </div>
</main>






<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>
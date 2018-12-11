<?php /*Template Name: contactpage */ ?>
<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<?php wp_head()?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
    <section id="section-b" class="grid">
    <ul>
      <li>
        <div class="card">
          <div class="card-content">
            <h1 class="cardtitle">Thriftin Ain't Easy!</h1>
            <img src="<?php bloginfo('template_url'); ?>/img/images/grouppic.jpg" alt="group photo">
						<p>Our mission is to take consignment fashion into the 21st century and modernize the way you find the next seccond hand look.Our warehouse collects and curates clothes from all over the northeast. Brands like Zara, Calvin Klein and Burberry. All at your fingertips and at a bargain</p>
          	<h3>est. in 2018</h3>
          </div>
        </div>
      </li>
      <li>
        <div class="card">
          <img src="<?php bloginfo('template_url'); ?>/img/images/map.jpg">
          <div class="card-content">
              <p>
                Corporate HQ located on
								1354 8th street New York, New York
                tuesday-friday 10am-5:30pm
                for customer service inqueries call
                1-800-242-9649
             </p>
          </div>
        </div>
      </li>
    </ul>
  </section>
	</main>


<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>
<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
<?php wp_head()?>

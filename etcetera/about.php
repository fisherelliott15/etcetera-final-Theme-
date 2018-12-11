<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(<section id="section-b" class="grid">
    <ul>
      <li>
        <div class="card">
          <div class="card-content">
            <h1 class="cardtitle">We Want to Hear from Your!</h1>
            <img src="images/grouppic.jpg" alt="">
            <p>456 N Spring Garden street, Philadelphia PA 19131</p> <p> or email us at etcetera@hotmail.com </p>
          </div>
        </div>
      </li>
      <li>
        <div class="card">
          <img src="images/map.jpg" alt="tasting">
          <div class="card-content">
              <p>
                office hours
                tuesday-friday 10am-5:30pm
                for customer service inqueries call
                1-800-242-9649
             </p>
          </div>
        </div>
      </li>
    </ul>
  </section>);

         ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<div id="main" class="site-main" role="main">
            <div class="container sara-home">
                <div class="row">

                    <div class="col-sm">
                        <img class="photo-home" src="https://static.freemomhugs.org/wp-content/uploads/2020/03/30004403/SaraCunningham_Headshot.jpg"/>
                    </div>
                    <div class="col-sm">
                        <h1>From The Founder:</h1>
                        <h2>Enough is Enough</h2>
                        <p>I’m a Christian mom with a gay kid living in Oklahoma saying enough is enough. If I don’t fight for my son (and his rights) like my hair is on fire, then who will? It’s time we celebrate our LGBTQ+ children. And I won’t stop until I no longer hear horror stories from the LGBTQ+ community and their mothers.</p>
                        <img src="https://static.freemomhugs.org/wp-content/uploads/2020/03/30021112/sara-signature-2.png"/>
                    </div>
                </div>
            </div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>



			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();

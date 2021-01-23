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

get_header();


?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<div id="main" class="site-main" role="main">

		<?php
        $headline1 = array(
            'class' => 'featured-home',
            'title' => 'Interested in resources?',
            'title-blurb' => 'Education',
            'button-text' => 'Learn More',
            );
        $headline2 = array(
            'class' => 'featured-home',
            'title' => 'Looking for a chapter?',
            'title-blurb' => 'Get Involved',
            'button-text' => 'Learn More',
        );
        $headline3 = array(
            'class' => 'featured-home',
            'title' => 'Interested in our programs and initiatives?',
            'title-blurb' => 'Programming',
            'button-text' => 'Learn More',
        );
        get_template_part( 'template-parts/sara-enough-enough');
        get_template_part( 'template-parts/index-latest-news');
        get_template_part( 'template-parts/main-section-index', null, $headline1);
        get_template_part( 'template-parts/main-section-index', null, $headline2);
        get_template_part( 'template-parts/main-section-index', null, $headline3);


//        if ( have_posts() ) :
//
//			if ( is_home() && ! is_front_page() ) : ?>
<!--				<header>-->
<!--					<h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
<!--				</header>-->
<!---->
<!---->
<!---->
<!--			--><?php
//			endif;
//
//			/* Start the Loop */
//			while ( have_posts() ) : the_post();
//
//				/*
//				 * Include the Post-Format-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content', get_post_format() );
//
//			endwhile;
//
//			the_posts_navigation();
//
//		else :
//
//			get_template_part( 'template-parts/content', 'none' );
//
//		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header();

?>
    <link rel="stylesheet" href="../wp-content/themes/wp-bootstrap-starter/newsroom.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">


    <?php
        $subNavBar = array(
            'class' => 'featured-home',
            'title' => 'Newsroom',
            'menu'  => 'newsroom',
            'title-blurb' => 'Education',
            'button-text' => 'Learn More',
            'background-url' => 'https://static.freemomhugs.org/wp-content/uploads/2020/10/22713631_1704555389575311_5091096668427809788_o.jpg',
        );
        get_template_part( 'template-parts/category-nav-bar', null, $subNavBar);

    ?>


	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<div id="main" class="site-main" role="main">


            <div class="container">
                <header class="blog-header py-3">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-12 pt-1">
                            <h1 class="text-dark font-700-weight">Latest News</h1>
<!--                            <a class="text-muted" href="#">Subscribe</a>-->
                        </div>
<!--                        <div class="col-4 text-center">-->
<!--                            <a class="blog-header-logo text-dark" href="#">--><?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?><!--</a>-->
<!--                        </div>-->
<!--                        <div class="col-4 d-flex justify-content-end align-items-center">-->
<!--                            <a class="text-muted" href="#">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>-->
<!--                            </a>-->
<!--                        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>-->
<!--                        </div>-->
                    </div>
                </header>


                <?php
                        get_template_part( 'template-parts/newsroom-first-post');
//                        get_template_part( 'template-parts/newsroom-post-cards');

                ?>
                <?php

                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/newsroom-post-cards');

//                    // If comments are open or we have at least one comment, load up the comment template.
//                    if ( comments_open() || get_comments_number() ) :
//                        comments_template();
//                    endif;

                endwhile; // End of the loop.
                ?>


            </div>

		</div><!-- #main -->

	</section><!-- #primary -->

<?php
get_footer();

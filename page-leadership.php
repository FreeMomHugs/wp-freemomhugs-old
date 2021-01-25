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
    <link rel="stylesheet" href="../wp-content/themes/wp-bootstrap-starter/leadership.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

	<section id="primary" class="content-area col-sm-12 col-lg-12 bg-light">
		<div id="main" class="site-main" role="main">


            <div class="container">
                <header class="blog-header py-3">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-8 text-left">
                            <?php  the_title( '<h1 class="text-dark font-700-weight">', '</h1>' ); ?>
                        </div>
                        <div class="col-2 d-flex justify-content-end align-items-center">
                            <a class="text-muted" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                            </a>
<!--                            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>-->
                        </div>
                    </div>
                </header>


                <?php
//                        get_template_part( 'template-parts/newsroom-first-post');

                ?>
                <?php
                $boardMembers = array(
                    'category' => 'Board of Directors',
                    'title' => 'Board of Directors',
                    'subtitle' => 'Voting members of the Board of Directors',
                );
                $officers = array(
                    'category' => 'Officers',
                    'title' => 'Board Officers',
                    'subtitle' => '',
                );
                $staff = array(
                    'category' => 'Staff',
                    'title' => 'Staff',
                    'subtitle' => '',
                );
                $advisors = array(
                    'category' => 'Advisors',
                    'title' => 'Advisors',
                    'subtitle' => 'Advisors are members of the Free Mom Hugs leadership team that serve in crucial roles 
                    necessary for Free Mom Hugs operation but are not voting members of the non-profit\'s governance structure. ',
                );

                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/leadership-cards', null, $staff);
                    get_template_part( 'template-parts/leadership-cards', null, $officers);
                    get_template_part( 'template-parts/leadership-cards', null, $boardMembers);
//                    get_template_part( 'template-parts/leadership-cards', null, $advisors);



//                    // If comments are open or we have at least one comment, load up the comment template.
//                    if ( comments_open() || get_comments_number() ) :
//                        comments_template();
//                    endif;

                endwhile; // End of the loop.
                ?>

                <h2>Committees</h2>
            </div>


		</div><!-- #main -->

	</section><!-- #primary -->

<?php
get_footer();

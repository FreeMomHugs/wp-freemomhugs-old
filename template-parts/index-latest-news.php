<?php
/**
 * Template part for displaying Sara's message
 */

?>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 index-news">

<?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'newsroom',    //Selecting post category by name
            'orderby' => 'date',
            'order'   => 'DESC',

        );
        $loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :

			/* Start the Loop */

            $numposts = 2;
			while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
?>
            <div class="bg-light col-sm pt-3 px-3 pt-md-5 px-md-5 text-center text-dark" style="background-image: url('<?php the_post_thumbnail_url() ?>'); background-size: cover; background-position: center;">
                <div class="my-5 py-5">
                <?php
                if ( true ) :

                    the_title( '<h2 class="display-5">', '</h2>' );
                    the_excerpt('<p class="lead">', '</p>');
                endif;
                ?>
                    <a href="<?php the_permalink()?>" type="button" class="btn btn-outline-light index-btn" >Read More</a>
                </div>
            </div>
    <?php
				//get_template_part( 'template-parts/content', get_post_format() );

                $numposts = $numposts-1;
			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
</div>

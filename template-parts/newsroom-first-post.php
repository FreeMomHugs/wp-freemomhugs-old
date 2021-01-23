<?php
/**
 * Template part for displaying Sara's message
 */

?>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">


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

            $numposts = 1;
			while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
?>
    <div class="col-md-6 px-0">
        <?php
        if ( true ) :

            the_title( '<h1 class="display-4 font-italic">', '</h1>' );
            the_excerpt('<p class="lead my-3">', '</p>');
        endif;
        ?>
        <p class="lead mb-0"><a href="<?php the_permalink()?>" class="text-white font-weight-bold" >Continue reading...</a></p>
    </div>
</div>
    <?php
				//get_template_part( 'template-parts/content', get_post_format() );

                $numposts = $numposts-1;
			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

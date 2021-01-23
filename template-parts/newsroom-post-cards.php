<?php
/**
 * Template part for displaying Sara's message
 */

?>

<div class="row mb-2">


<?php
        $args = array(
            'post_type' => 'post',
            'offset' => 1,
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
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-350">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary"><?php
                    $category = get_the_category(); echo $category[0]->cat_name;
                    ?></strong>
                <h3 class="mb-0">


                    <?php
                    if ( true ) :

                        the_title( '<a class="text-dark" >', '</a>' );
                    ?>
                    </h3>
                    <?php
                        the_date('M d','<div class="mb-1 text-muted">', '</div>');
                        the_excerpt('<p class="card-text mb-auto">', '</p>');
                    endif;
                    ?>

                <a href="<?php the_permalink()?>">Continue reading...</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
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

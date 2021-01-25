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

            $numposts = 20;
			while ( $loop->have_posts() && $numposts > 0 ) : $loop->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
?>
    <div class="col-md-6 post-cards">

        <div class="card flex-md-row mb-4 box-shadow h-250">
            <div class="card-body d-flex flex-column align-items-start">
                <?php
                    $category = get_the_category();
                    $catName = $category[0]->cat_name;
                    $textDecoration = "";
                    if (strcasecmp($catName,"feature") == 0) {
                        $textDecoration .= "text-primary";
                    } elseif (strcasecmp($catName,"update") == 0) {
                        $textDecoration .= "text-success";
                    }

                    ?>
                <strong class="d-inline-block mb-2 <?php echo $textDecoration; ?>"><?php echo $catName; ?></strong>
                <h3 class="mb-0 post-cards-title" style="text-overflow: ellipsis;">


                    <?php
                    if ( true ) :
                        ?><a class="text-dark" href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>
                    </h3>
                    <?php
                        the_date('M d','<div class="mb-1 text-muted">', '</div>');
                        ?>
                       <p class="card-text mb-auto">
                           <?php
                           $excerpt = get_the_excerpt();

                           $excerpt = substr( $excerpt, 0, 260 ); // Only display first 260 characters of excerpt
                           $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
//                           echo $result;
                           ?>
                       </p>
                     <?php
                        endif;
                     ?>

                <a href="<?php the_permalink()?>">Continue reading...</a>
            </div>
            <img class="card-img-right d-md-block" src="<?php the_post_thumbnail_url('medium') ?>" alt="" style="max-width: 300px;">

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

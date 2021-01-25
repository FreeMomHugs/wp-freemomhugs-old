<?php
/**
 * Template part for displaying Sara's message
 */

?>

<div class="leadership py-5 bg-light">
  <div class="container">
      <h1 class="pb-3"><?php echo $args['title'] ?></h1>
      <p class="pb-3"><?php echo $args['subtitle'] ?></p>
    <div class="row">

<?php



        $queryArgs = array(
            'post_type' => 'post',
            'offset' => 0,
            'category_name' => $args['category'],    //Selecting post category by name
            'orderby' => 'date',
            'order'   => 'DESC',

        );
        $loop = new WP_Query( $queryArgs );
		if ( $loop->have_posts() ) :

			/* Start the Loop */

			while ( $loop->have_posts() ) : $loop->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow leadership-card ">

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
                <img class="card-img-top" src="<?php the_post_thumbnail_url('medium') ?>">
                <div class="card-body">
                    <h2><a class="text-dark" href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h2>
                    <h6><?php echo get_post_meta( get_the_ID(), 'Position', true );?></h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted"></small>
                    </div>
                </div>


            </div>
        </div>


    <?php
				//get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </div>
  </div>
</div>

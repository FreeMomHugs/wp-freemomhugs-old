<?php
/**
 * Template part for displaying main headline sections
*/
?>

<div class="position-relative overflow-hidden p-md-5 m-md-3 text-center bg-light headline" style="background-image: url(<?php echo $args['background-url'];?>); background-blend-mode: darken; background-size: cover;">
    <div class="col-md-8 p-lg-8 mx-auto p-5 m-5">
        <h3 class="text-light"><?php echo $args['title-blurb'];?></h3>
        <h1 class="text-light"><?php echo $args['title'];?></h1>
        <p class="text-light lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <a class="btn btn-outline-light text-light index-btn" href="#"><?php echo $args['button-text'];?></a>
    </div>
</div>


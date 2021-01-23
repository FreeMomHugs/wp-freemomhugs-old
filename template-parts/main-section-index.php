<?php
/**
 * Template part for displaying main headline sections
*/
?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light headline">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h3><?php echo $args['title-blurb'];?></h3>
        <h1 class="display-4 font-weight-normal"><?php echo $args['title'];?></h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <a class="btn btn-outline-dark index-btn" href="#"><?php echo $args['button-text'];?></a>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>


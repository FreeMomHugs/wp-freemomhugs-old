<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top px-5">
    <div class="container-fluid">
        <a class="navbar-brand font-700-weight" href="#"><?php echo $args['title']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <?php
            wp_nav_menu(array(
                'menu'            => $args['menu'],
                'container'       => 'div',
                'container_id'    => '',
                'container_class' => 'collapse navbar-collapse navbar-nav',
                'menu_id'         => false,
                'menu_class'      => 'nav ml-auto',
                'depth'           => 3,
            ));
            ?>
    </div>
</nav>
<div id="content" class="site-content bg-light">
    <div class="container">
        <div class="row">
        </div>
    </div>
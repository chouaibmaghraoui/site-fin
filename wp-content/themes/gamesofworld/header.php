<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<img src="<?php echo get_bloginfo('template_directory') ?>/img/promotion.png" alt="" width="100%" height="100%">
<nav class="navbar navbar-light"style="background: rgb(146,153,153);
background: linear-gradient(0deg, rgba(146,153,153,1) 0%, rgba(27,27,26,1) 100%);"> 
<a href="http://localhost:8080/gamesofworld/wordpress//"><h2 class="logo">Games of World</h2></a>

  <!-- Another variation with a button -->
 
  <?= get_search_form() ?>
</div>

<div class="d-md-flex bd-light">    
    <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><a href="http://localhost:8080/gamesofworld/wordpress/el-configurteur/">S'inscrire</a></button>
    </form>
    </a>
    
    
</div>

</nav>
</nav>

  <!-- Menu header -->
  <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </div>
    </nav>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <style media="screen">
      .headermenu{
        background-image: url('<?php header_image() ?>');
        width:100%;
        height:70vh;
        background-repeat: no-repeat;
        background-size: 100%;
              }
    </style>
    <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>

      <?php wp_body_open(); ?>

<header class="header">

    <div class="container-fluid pl-0 pr-0 headermenu">
      <nav class="navbar navbar-expand-lg navbar-light navbarmenu">
          <div class="logoastral text-uppercase">
            <?php the_custom_logo() ?>
            <a href=" " class="title"><?php bloginfo('name'); ?></a>
            <a href=""><?php bloginfo('description'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" navbarmenucollapse collapse navbar-collapse text-uppercase" id="navbarNav">
                <?php wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto',
                    ]) ?>


            </div>
      </nav>
  </div>

  </header>

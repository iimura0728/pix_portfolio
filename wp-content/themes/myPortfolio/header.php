<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="ja"> <![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="ja"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="ja"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ja">
  <!--<![endif]-->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" sizes="16x16" type="image/png" />

    <title><?php bloginfo('name');  ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <!-- ↓HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- ↑HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="bodyInner">
      <header>
        <div class="inner">
          <div class="toggleWrap">
            <p class="toggle">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </p>
          </div>
          <nav class="glbNav">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'place_global',
                  'items_wrap' => '<ul class="list">%3$s</ul>',
                  'link_after' => '<span class="line"></span>',
                  'container' => false
                )
              );
            ?>
          </nav>
        </div>
      </header>
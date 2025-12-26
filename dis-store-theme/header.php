<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container header-inner">

    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">DIS<span>STORE</span></a>

    <nav class="main-nav desktop-nav" aria-label="Головне меню">
      <?php
        wp_nav_menu([
          'theme_location' => 'header_menu',
          'container' => false,
          'menu_class' => 'menu',
          'fallback_cb' => false,
        ]);
      ?>
    </nav>

    <div class="header-right">
      <form class="header-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="search-input" type="search" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
      </form>

      <button class="burger" type="button" aria-label="Відкрити меню" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>

  <div class="mobile-menu" id="mobileMenu" hidden>
    <div class="container mobile-menu-inner">
      <form class="header-search mobile-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="search-input" type="search" name="s" placeholder="Пошук...">
      </form>

      <nav class="main-nav mobile-nav" aria-label="Мобільне меню">
        <?php
          wp_nav_menu([
            'theme_location' => 'header_menu',
            'container' => false,
            'menu_class' => 'menu mobile-menu-list',
            'fallback_cb' => false,
          ]);
        ?>
      </nav>
    </div>
  </div>
</header>

<main class="site-main">

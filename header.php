<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Digital SEDIS</title>
    <?php wp_head() ?>
</head>

<header>
    <nav class="navbar navbar-expand-xl fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_template_directory_uri() . '/imgs/logo_20.svg' ?>" alt="" srcset="">
            </a>
            <?php
            // Primary navigation menu.
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'depth' => 2,
                    // 1 = no dropdowns, 2 = with dropdowns.
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
            ?>
            <form class="d-flex ms-auto me-4" role="search">
                <input class="form-control me-2 d-none" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
<main>
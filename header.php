<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="JEM ZOO - Home">
    <link rel="apple-touch-icon" sizes="180x180" href="./icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/icons/manifest.json">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#54761f">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEM ZOO - Home</title>
    <?php wp_head(); ?>
</head>

<body class="bg-body dark:bg-gray-900">
    <!-- Main-Content -->
    <main>
        <!-- header -->
        <header class=" bg-green-900 dark:bg-gray-900">
            <!-- Navigation -->

            <?php if (has_nav_menu('top-menu')) : ?>

                <nav id="site-navigation" class="main-menu flex items-center bg-green-900 dark:bg-gray-900 dark:text-white p-3 flex-wrap font-medium md:text-lg" role="navigation">
                    <a href="/jemzoo" class="p-2 mr-4 inline-flex items-center">
                        <picture class="p-1 bg-white mr-2 ">
                            <img src="<?php bloginfo('template_directory'); ?>/images/zoo.png" alt="picture of the JEM ZOO logo" srcset="" width="60px">
                        </picture>
                        <span class="text-4xl md:text-5xl text-white font-bold uppercase tracking-wide">Jem Zoo</span>
                    </a>
                    <button class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler" data-target="#navigation">
                        <i class="material-icons">Menu</i>
                    </button>
                    <div class="hidden top-navbar w-full lg:inline-flex lg:w-auto" id="navigation">
                        <?php

                        // Primary navigation menu.
                        wp_nav_menu(array(
                            'menu_class' => 'nav-menu',
                            'container' => false,
                            'theme_location' => 'top-menu',
                            'items_wrap' => '<ul>%3$s</ul>',
                        ));
                        ?>
                    </div>
                </nav><!-- .main-navigation -->

            <?php endif; ?>

        </header>
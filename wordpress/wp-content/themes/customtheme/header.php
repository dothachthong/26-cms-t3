<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <title><?php bloginfo( 'name' ); ?></title>
 <?php wp_head() ?>
 
</head>
<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
     <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
     <h4><?php bloginfo( 'description' ); ?></h4>
     <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    </header>



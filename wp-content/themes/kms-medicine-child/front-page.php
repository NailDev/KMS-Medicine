<?php
/**
 * Главная страница
 */
get_header(); ?>

<main id="main-content" class="kms-landing">
    
 
    <?php get_template_part('template-parts/hero'); ?>
    
    
    <?php get_template_part('template-parts/services'); ?>
    
   
    <?php get_template_part('template-parts/advantages'); ?>
    
    
    <?php get_template_part('template-parts/steps'); ?>

    
    <?php get_template_part('template-parts/work-types'); ?>

    
    <?php get_template_part('template-parts/faq'); ?>

    
    <?php get_template_part('template-parts/emergency'); ?>
    
   
    <?php get_template_part('template-parts/license'); ?>

    
    <?php get_template_part('template-parts/equipment'); ?>
    
    
    <?php get_template_part('template-parts/contact'); ?>
    
  
    <?php get_template_part('template-parts/about'); ?>

</main>

<?php 
get_template_part('template-parts/modal', 'contact');

get_footer(); 
?>
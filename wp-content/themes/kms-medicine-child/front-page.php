<?php
/**
 * Главная страница
 */
get_header(); ?>

<main id="main-content" class="kms-landing">
    
    <!-- 1. Hero -->
    <?php get_template_part('template-parts/hero'); ?>
    
    <!-- 2. Услуги -->
    <?php get_template_part('template-parts/services'); ?>
    
    <!-- 4. Преимущества -->
    <?php get_template_part('template-parts/advantages'); ?>
    
    <!-- 5. Этапы работы -->
    <?php get_template_part('template-parts/steps'); ?>

    <!-- 3. Виды бригад -->
    <?php get_template_part('template-parts/work-types'); ?>

    <!-- 6. FAQ -->
    <?php get_template_part('template-parts/faq'); ?>

    <!-- 7. Экстренная помощь -->
    <?php get_template_part('template-parts/emergency'); ?>
    
    <!-- 8. Лицензии -->
    <?php get_template_part('template-parts/license'); ?>

    <!-- 9. Оборудование -->
    <?php get_template_part('template-parts/equipment'); ?>
    
    <!-- 10. Форма заявки -->
    <?php get_template_part('template-parts/contact'); ?>
    
    <!-- 11. О компании -->
    <?php get_template_part('template-parts/about'); ?>

</main>

<?php 
get_template_part('template-parts/modal', 'contact');

get_footer(); 
?>
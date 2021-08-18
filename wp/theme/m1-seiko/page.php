<?php
/**
 * Template Name: page
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<?php if(have_posts()): while(have_posts()):the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; endif; ?>


<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

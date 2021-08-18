<?php
/**

 */
get_header(); ?>

<!-- ここからコンテンツ -->

<ul>
  <?php if (have_posts()) :while (have_posts()): the_post(); ?>
  <li>
    <a class="" href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</ul>
<!-- ここまでコンテンツ -->



<?php get_footer(); ?>

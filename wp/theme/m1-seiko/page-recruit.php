<?php
/**
 * Template Name: recruit
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        RECRUIT
        <span>
          採用情報
        </span>
      </h2>
      </div>
    </div>

  </div>


    <main id="main" class="l-main">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php remove_filter ('the_content', 'wpautop'); ?>
          <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
    </main>
    <!-- / main -->

    </div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

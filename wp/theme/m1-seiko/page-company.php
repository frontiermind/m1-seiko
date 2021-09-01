<?php
/**
 * Template Name: company
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents company_info l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        <?php the_title(); ?>
        <span>
          会社案内
        </span>
      </h2>
      </div>
    </div>

  </div>

  <div class="l-content l-container">

<?php include TEMPLATEPATH.'/common/sidebar.php';?>

    <main id="main" class="l-main">
      <div class="l-main_inner">
      <section class="sec-inner_content">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php remove_filter ('the_content', 'wpautop'); ?>
            <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>


      </section>
      </div>

<?php include TEMPLATEPATH.'/common/contact.php';?>

    </main>
    <!-- / main -->

  </div>

</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

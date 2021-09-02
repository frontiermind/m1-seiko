<?php
/**
 * Template Name: company
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents products products-single single l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        NEWS
        <span>
          お知らせ
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
        <div class="products-single_header">
        <h2><span><?php the_title(); ?></span></h2>
        </div>
        <div class="sec-content__inner products-single_content">

          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif; ?>


        </div>
      </section>
      </div>

      <?php include TEMPLATEPATH.'/common/contact.php';?>

      <?php include TEMPLATEPATH.'/common/sidebarsp.php';?>

    </main>
    <!-- / main -->

  </div>

</div>

<!-- ここまでコンテンツ -->


<?php get_footer(); ?>

<?php
/**
 * Template Name: contact
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        CONTACT
        <span>
          お問い合わせ
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
        <div class="contact_header">
          <h2><span>お問い合わせ</span></h2>
        </div>

        <div class="sec-content__inner company-info_content">

          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile; ?>
          <?php endif; ?>

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

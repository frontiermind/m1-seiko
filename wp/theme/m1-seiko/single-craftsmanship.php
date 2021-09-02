<?php
/**

 */
get_header(); ?>
<!-- ここからコンテンツ -->

<div class="main-block side-contents products products-single single l-page craftsmanship">
    <div class="mainvisual">

      <div class="l-container">
        <div class="mainvisual-inner">
        <h2>
          CRAFTSMANSHIP
          <span>
            M1のものづくり
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
        <div class="sec-content__inner products-single_content">
          <div class="products-single_header">
          <h2>
            <span><?php the_title(); ?></span>
            <p>
              <?php  if(get_field("cs_sub_tlt")): ?>
                <?php echo get_field("cs_sub_tlt"); ?>
              <?php  endif;?>
            </p>
          </h2>

          </div>
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

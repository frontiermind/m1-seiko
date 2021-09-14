<?php
/**

 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents l-page craftsmanship">
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
      <section class="sec-inner_content">
        <div class="sec-content__inner">
          <ul class="pdlist">

            <?php if (have_posts()) :while (have_posts()): the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                <div class="pdlist-img">
                  <?php  if(get_field("cs_thumb")): ?>
                    <img src="<?php echo get_field("cs_thumb"); ?>" alt="<?php the_title(); ?>" />
                  <?php  endif;?>
                </div>
                <div class="pdlist-inner">
                  <div class="pdlist-inner_contents">
                  <h3 class="pdlist-title"><span><?php the_title(); ?></span></h3>
                  <?php  if(get_field("cs_catch")): ?>
                  <p><?php echo get_field("cs_catch"); ?></p>
                  <?php  endif;?>
                  </div>
                </div>
                </a>
              </li>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>






          </ul>
        </div>
      </section>

      <?php include TEMPLATEPATH.'/common/contact.php';?>

      <?php include TEMPLATEPATH.'/common/sidebarsp.php';?>

    </main>
    <!-- / main -->
  </div>

</div>

<!-- ここまでコンテンツ -->



<?php get_footer(); ?>

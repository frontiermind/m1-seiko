<?php
/**

 */
get_header(); ?>




<!-- ここからコンテンツ -->

<div class="main-block side-contents products l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        PRODUCTS
        <span>
          製品情報
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
                  <?php  if(get_field("pd_thumb")): ?>
                  	<img src="<?php echo get_field("pd_thumb"); ?>" alt="<?php the_title(); ?>" />
                  <?php  endif;?>
                </div>
                <div class="pdlist-inner">
                  <div class="pdlist-inner_contents">
                  <h3 class="pdlist-title"><span>  <?php the_title(); ?></span></h3>
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

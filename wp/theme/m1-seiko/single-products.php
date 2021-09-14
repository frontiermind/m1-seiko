<?php
/**

 */
get_header(); ?>
<!-- ここからコンテンツ -->

<?php // 投稿のスラッグを取得
 $page = get_post( get_the_ID() ); $slug = $page->post_name;
?>

<div class="main-block side-contents products products-single single l-page <?php echo $slug; ?>">
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
      <div class="l-main_inner">
      <section class="sec-inner_content">
        <div class="products-single_header">
        <h2><span><?php the_title(); ?></span></h2>
        <div class="products-single_header-description">
          <?php  if(get_field("pd_header")): ?>
          	<?php echo get_field("pd_header"); ?>
          <?php  endif;?>
        </div>
        <div class="products-single_header_pdf">
        <?php
        $filefiled = get_field('pd_pdf');
        if(!empty($filefiled)) {
        ?>
        <a class="btn" href="<?php echo $filefiled['url']; ?>" target="_blank"><i class="fas fa-file-pdf"></i>PDFダウンロード</a>
        <?php } ?>
        </div>
        </div>
        <div class="sec-content__inner products-single_content">

          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php remove_filter ('the_content', 'wpautop'); ?>
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

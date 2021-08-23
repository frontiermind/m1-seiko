<div class="l-sidebar u-pc-hide">

  <div class="sp-menu">

  <div class="side_operation">
    <a href="<?php echo home_url(); ?>/operation_status/">
      <h3>稼働状況</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
      <p class="operation_percent">50%</p>
      <p>各加工の稼働状況をご案内します。</p>
    </a>
  </div>

  <h3>COMPANY<span>会社概要</span></h3>
  <ul class="side_lineup">
    <li><a href="<?php echo home_url(); ?>/iso9001_quality/">品質/ISO</a></li>
    <li><a href="<?php echo home_url(); ?>/kamata_meisters_network/">KMN</a></li>
    <li><a href="<?php echo home_url(); ?>/access_map/">アクセス</a></li>
  </ul>

  <ul class="l-sidebar_infobox_bnr">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/common/iso_banner.png" alt="ISO認証 afaQ UKAS"></li>
    <li><a href="http://m1-seiko.sblo.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/blog_banner.png" alt="職人切磋琢磨ブログ"></a></li>
  </ul>

  <h3 class="blog-menu"><a href="<?php echo home_url(); ?>/craftsmanship/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/header_blog.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_blog.png 1x, <?php echo get_template_directory_uri(); ?>/images/common/header_blog@2x.png 2x" alt="M1のものづくり当社の取り組み"></a></h3>
  <ul class="side_lineup blog-menu-list">
    <ul class="side_lineup blog-menu-list">
      <li><a href="#"><span class="new">揺れ止め治具</span></a></li>
      <?php
      $the_query = new WP_Query( array(
        'post_status' => 'publish',
        'post_type' => 'craftsmanship', //カスタム投稿タイプ名
        'posts_per_page' => -1, // 表示件数
      ) );


      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
    </ul>
  </ul>

  <div class="l-sidebar_fb">
    <a href="http://www.facebook.com/pages/有限会社-エムワン精工/110676719089475" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_fb.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/btn_fb.png 1x, <?php echo get_template_directory_uri(); ?>/images/common/btn_fb@2x.png 2x" alt="FACEBOOKエムワン精工Facebookはこちら"></a>
  </div>

  </div>
  </div>
</div>

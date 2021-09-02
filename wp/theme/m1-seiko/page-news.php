<?php
/**
 * Template Name: news
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents company_info l-page">
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
        <ul class="newslist">

          <?php

          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $the_query = new WP_Query( array(
            'post_status' => 'publish',
            'post_type' => 'post', //カスタム投稿タイプ名
            'paged' => $paged,
            'posts_per_page' => 12, // 表示件数
            'orderby'     => 'date',
            'order' => 'DESC'
          ) );


          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="newslist-col newslist-date"><?php echo get_the_date('Y.n.j'); ?></div>
                <div class="newslist-col newslist-title">
                  <h3><?php the_title(); ?></h3>
                 </div>
              </a>
            </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                  </ul>


        <div class="c-pagination c-pagination_bk">
          <?php //ページリスト表示処理
          global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
            $paginate_format = '';
            $paginate_base = add_query_arg('paged','%#%');
          }else{
            $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/','paged');
            $paginate_base .= '%_%';
          }


          if($paged == $the_query->max_num_pages){
            echo '<p class="next c-pagination-arrow arrow_notlink"></p>';
            if($paged == 1){
              echo '<p class="prev c-pagination-arrow arrow_notlink"></p>';
            }
          }else if($paged == 1){
            echo '<p class="prev c-pagination-arrow arrow_notlink"></p>';
          }else{

          }
          echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $the_query->max_num_pages,
            'mid_size' => 1,
            'prev_next' => true,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '',
            'next_text' => '',
          )); ?>
        </div>


      </section>
      </div>

<?php include TEMPLATEPATH.'/common/contact.php';?>

    </main>
    <!-- / main -->

  </div>

</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

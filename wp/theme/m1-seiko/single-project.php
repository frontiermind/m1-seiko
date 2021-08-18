<?php
/**

 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block">

  <main class="l-main">
    <article>
      <section class="sec-content project-sec">

          <ul class="project-sec_postlist ssp fade_contents">
            <?php


            $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'post_type' => 'project', //カスタム投稿タイプ名
              'posts_per_page' => -1, // 表示件数
              'orderby'     => 'date',
              'order' => 'DESC'
            ) );


            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
              ?>
            <li>
              <a class="" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </li>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
          </ul>

          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

          <div class="project-sec_fv fade_contents">
            <?php  if(get_field("project_fv")): ?>
            	<img src="<?php echo get_field("project_fv"); ?>" alt="">
            <?php  endif;?>
          </div>
          <div class="l-container project-sec_post fade_contents">


            <?php while(the_repeater_field('project_posts')):?>

              <?php if(get_sub_field('project_posts_txt_jp')): ?>
                <div class="project-sec_post_txt jp">
                  <?php echo get_sub_field('project_posts_txt_jp'); ?>
                </div>
              <?php endif;?>

              <?php if(get_sub_field('project_posts_txt_en')): ?>
                <div class="project-sec_post_txt en">
                  <?php echo get_sub_field('project_posts_txt_en'); ?>
                </div>
              <?php endif;?>


              <div class="project-sec_post_img">
                <div class="grid-sizer"></div>
              <?php while(the_repeater_field('project_posts_img_list')):?>

                <?php if(get_sub_field('project_posts_img_list_lists')): ?>
                  <div class="project-sec_post_img_box"><img src="<?php echo get_sub_field('project_posts_img_list_lists'); ?>" alt=""></div>
                <?php endif;?>

              <?php endwhile;?>
              </div>

            <?php endwhile;?>




          <?php endwhile; ?>
        <?php endif; ?>


        </div>
      </section>
    </article>
  </main>

</div>

<!-- ここまでコンテンツ -->


<?php get_footer(); ?>

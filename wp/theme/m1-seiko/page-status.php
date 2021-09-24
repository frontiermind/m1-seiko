<?php
/**
 * Template Name: status
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents company_info l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        OPERATION STATUS
        <span>
          稼働状況
        </span>
      </h2>
      </div>
    </div>

  </div>

  <div class="l-content l-container">

<?php include TEMPLATEPATH.'/common/sidebar.php';?>

    <main id="main" class="l-main">
      <div class="l-main_inner">
      <section class="sec-inner_content company-info_content">
        <p class="status-description">
          エムワン精工における各加工品目の稼働状況をお知らせいたします。<br>
          状況は流動的ですので、詳細はお問い合わせください。
        </p>
        <div class="status-display">

          <div class="status-display_column">
            <h3>円筒研磨加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">


                <?php
                $cylindrical_grinding_status = get_field('cylindrical_grinding_status');
                if ($cylindrical_grinding_status == 'status_25') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/25.png" alt="25%">
                  <p class="operation_percent">25%</p>
                  <p class="possible">余裕アリ</p>
                <?php } elseif ($cylindrical_grinding_status == 'status_50') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/50.png" alt="50%">
                  <p class="operation_percent">50%</p>
                  <p class="possible">受注可能</p>
                <?php } elseif ($cylindrical_grinding_status == 'status_75') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/75.png" alt="75%">
                  <p class="operation_percent">75%</p>
                  <p class="possible">要相談</p>
                <?php } elseif ($cylindrical_grinding_status == 'status_100') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/100.png" alt="100%">
                  <p class="operation_percent">100%</p>
                  <p class="possible">フル稼働</p>
                <?php } else { ?>

                <?php } ?>



              </div>
              <div class="status-display_column_inner_txt">
                <?php  if(get_field("cylindrical_grinding_status_txt")): ?>
                	<?php echo get_field("cylindrical_grinding_status_txt"); ?>
                <?php  endif;?>
              </div>
            </div>
          </div>

          <div class="status-display_column">
            <h3>内径研磨加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">

                <?php
                $internal_grinding_status = get_field('internal_grinding_status');
                if ($internal_grinding_status == 'status_25') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/25.png" alt="25%">
                  <p class="operation_percent">25%</p>
                  <p class="possible">余裕アリ</p>
                <?php } elseif ($internal_grinding_status == 'status_50') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/50.png" alt="50%">
                  <p class="operation_percent">50%</p>
                  <p class="possible">受注可能</p>
                <?php } elseif ($internal_grinding_status == 'status_75') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/75.png" alt="75%">
                  <p class="operation_percent">75%</p>
                  <p class="possible">要相談</p>
                <?php } elseif ($internal_grinding_status == 'status_100') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/100.png" alt="100%">
                  <p class="operation_percent">100%</p>
                  <p class="possible">フル稼働</p>
                <?php } else { ?>

                <?php } ?>

              </div>
              <div class="status-display_column_inner_txt">
                <?php  if(get_field("internal_grinding_status_txt")): ?>
                	<?php echo get_field("internal_grinding_status_txt"); ?>
                <?php  endif;?>
              </div>
            </div>
          </div>

          <div class="status-display_column">
            <h3>ネジ研磨加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">

                <?php
                $screws_status = get_field('screws_status');
                if ($screws_status == 'status_25') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/25.png" alt="25%">
                  <p class="operation_percent">25%</p>
                  <p class="possible">余裕アリ</p>
                <?php } elseif ($screws_status == 'status_50') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/50.png" alt="50%">
                  <p class="operation_percent">50%</p>
                  <p class="possible">受注可能</p>
                <?php } elseif ($screws_status == 'status_75') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/75.png" alt="75%">
                  <p class="operation_percent">75%</p>
                  <p class="possible">要相談</p>
                <?php } elseif ($screws_status == 'status_100') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/100.png" alt="100%">
                  <p class="operation_percent">100%</p>
                  <p class="possible">フル稼働</p>
                <?php } else { ?>

                <?php } ?>

              </div>
              <div class="status-display_column_inner_txt">
                <?php  if(get_field("screws_status_txt")): ?>
                	<?php echo get_field("screws_status_txt"); ?>
                <?php  endif;?>
              </div>
            </div>
          </div>

          <div class="status-display_column">
            <h3>雌ネジ加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">

                <?php
                $femele_screw_status = get_field('femele_screw_status');
                if ($femele_screw_status == 'status_25') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/25.png" alt="25%">
                  <p class="operation_percent">25%</p>
                  <p class="possible">余裕アリ</p>
                <?php } elseif ($femele_screw_status == 'status_50') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/50.png" alt="50%">
                  <p class="operation_percent">50%</p>
                  <p class="possible">受注可能</p>
                <?php } elseif ($femele_screw_status == 'status_75') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/75.png" alt="75%">
                  <p class="operation_percent">75%</p>
                  <p class="possible">要相談</p>
                <?php } elseif ($femele_screw_status == 'status_100') { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/status/100.png" alt="100%">
                  <p class="operation_percent">100%</p>
                  <p class="possible">フル稼働</p>
                <?php } else { ?>

                <?php } ?>

              </div>
              <div class="status-display_column_inner_txt">
                <?php  if(get_field("femele_screw_status_txt")): ?>
                	<?php echo get_field("femele_screw_status_txt"); ?>
                <?php  endif;?>
              </div>
            </div>
          </div>

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

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
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
                <p class="operation_percent">50%</p>
                <p class="possible">受注可能</p>
              </div>
              <div class="status-display_column_inner_txt">
                混雑していますが受注可能です。<br>納期等お問合せください。
              </div>
            </div>
          </div>

          <div class="status-display_column">
            <h3>内径研磨加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
                <p class="operation_percent">50%</p>
                <p class="possible">受注可能</p>
              </div>
              <div class="status-display_column_inner_txt">
                混雑していますが受注可能です。<br>納期等お問合せください。
              </div>
            </div>
          </div>

          <div class="status-display_column">
            <h3>ネジ研磨加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
                <p class="operation_percent">50%</p>
                <p class="possible">受注可能</p>
              </div>
              <div class="status-display_column_inner_txt">
                混雑していますが受注可能です。<br>納期等お問合せください。
              </div>
            </div>
          </div>

          <div class="status-display_column">
            <h3>雌ネジ加工</h3>
            <div class="status-display_column_inner">
              <div class="status-display_column_inner_percent">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
                <p class="operation_percent">50%</p>
                <p class="possible">受注可能</p>
              </div>
              <div class="status-display_column_inner_txt">
                混雑していますが受注可能です。<br>納期等お問合せください。
              </div>
            </div>
          </div>

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

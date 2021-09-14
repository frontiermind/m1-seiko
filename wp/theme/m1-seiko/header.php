<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <title></title>





<?php if(is_post_type_archive('archive')): ?>

<?php endif; ?>



<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjp.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">




  <?php wp_head(); ?>
  </head>

  <?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  ?>
  <body <?php body_class( $class ); ?>>

    <?php if(is_home()||is_front_page()): ?>
      <div class="l-wrapper <?php echo $slug; ?>">
    <?php elseif(is_page('company')): ?>
      <div class="l-wrapper l-page company">
    <?php else: ?>
      <div class="l-wrapper l-page <?php echo $slug; ?>">
    <?php endif; ?>




    <header id="header" class="l-header">

      <div class="header-top">
        <h1 class="header-logo">
          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="エムワン精工"></a>
        </h1>
        <div class="g-nav-block">
        <nav id="js-menu" class="globalnavi">
           <ul class="gnavi-list">
             <li> <a class="nav-top" href="<?php echo home_url('/'); ?>"><p>TOP</p></a></li>
             <li> <a class="nav-products" href="<?php echo home_url('/'); ?>products/"><p>製品情報</p></a></li>
             <li><a class="nav-overview" href="<?php echo home_url('/'); ?>company_info/"><p>会社案内</p></a></li>
             <li><a class="nav-contact" href="<?php echo home_url('/'); ?>craftsmanship/"><p>エムワンのものづくり</p></a></li>
             <li><a class="nav-estimate" href="<?php echo home_url('/'); ?>recruit/"><p>採用情報</p></a></li>
             <li><a class="nav-faq" href="<?php echo home_url('/'); ?>contact/"><p><i class="fas fa-envelope"></i>お問い合わせ</p></a></li>
          </ul>
        </nav>
        </div>

        <div id="js-menuToggle" class="gnav-btn">
          <div class="gnav-btn__container">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>


      </div>

    </header>

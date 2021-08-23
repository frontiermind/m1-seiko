<?php
/**
 * Template Name: top
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block">
  <div class="mainvisual">
    <div class="js-slider">
      <li><img class="u-sp-hide" src="<?php echo get_template_directory_uri(); ?>/images/top/slide/slide01.jpg" alt=""><img class="u-pc-hide" src="<?php echo get_template_directory_uri(); ?>/images/top/slide/slide01_sp.jpg" alt=""></li>
      <li><img class="u-sp-hide" src="<?php echo get_template_directory_uri(); ?>/images/top/slide/slide02.jpg" alt=""><img class="u-pc-hide" src="<?php echo get_template_directory_uri(); ?>/images/top/slide/slide02_sp.jpg" alt=""></li>
      <li><img class="u-sp-hide" src="<?php echo get_template_directory_uri(); ?>/images/top/slide/slide03.jpg" alt=""><img class="u-pc-hide" src="<?php echo get_template_directory_uri(); ?>/images/top/slide/slide03_sp.jpg" alt=""></li>
    </div>

    <div class="main-copy">
      <h2>人に優しく　仕事に厳しく<br>
        たゆまぬ技術と品質の向上を信条とし、<br>
        利益と信頼を獲得する。</h2>
    </div>
    <div class="main-copy_bg">
    </div>

  </div>

  <section class="sec-contents sec-product">
    <div class="l-container">

      <div class="top-operation">

        <div class="top-operation_inner">

          <h2><span>稼働状況</span></h2>

          <ul class="top-operation_list">

            <li>
              <h3>円筒研磨<br class="u-pc-hide">加工</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
              <p class="operation_percent">50%</p>
              <p class="possible">受注可能</p>
            </li>

            <li>
              <h3>内径研磨<br class="u-pc-hide">加工</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
              <p class="operation_percent">50%</p>
              <p class="possible">受注可能</p>
            </li>

            <li>
              <h3>ネジ研磨<br class="u-pc-hide">加工</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
              <p class="operation_percent">50%</p>
              <p class="possible">受注可能</p>
            </li>

            <li>
              <h3>雌ネジ<br class="u-pc-hide">加工</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/operation_50.png" alt="50%">
              <p class="operation_percent">50%</p>
              <p class="possible">受注可能</p>
            </li>

          </ul>

        </div>

      </div>

      <ul class="top-product">
        <li>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_products01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/top/top_products01.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/top/top_products01@2x.jpg 2x" alt="">
              <h2><span>円筒研磨</span></h2>
            </a>
        </li>
        <li>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_products02.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/top/top_products02.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/top/top_products02@2x.jpg 2x" alt="">
              <h2><span>内径研磨</span></h2>
            </a>
        </li>
        <li>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_products03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/top/top_products03.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/top/top_products03@2x.jpg 2x" alt="">
              <h2><span>その他加工</span></h2>
            </a>
        </li>
        <li>
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_products04.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/top/top_products04.jpg 1x, <?php echo get_template_directory_uri(); ?>/images/top/top_products04@2x.jpg 2x" alt="">
              <h2><span>ネジ研磨</span></h2>
            </a>
        </li>
      </ul>
    </div>
  </section>

  <!--<section class="sec-content index-section__lineup">
    <h2 class="sec__title"><span>製品から選ぶ</span></h2>
    <div class="index-section__inner">
      <div class="l-container">
        <ul class="index-lineup">
          <li>
            <a href="/single/">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/illust1.jpg" alt="">
                <figcaption>円筒研磨</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="/single/">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/illust2.jpg" alt="">
                <figcaption>テーパー加工</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="/single/">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/illust3.jpg" alt="">
                <figcaption>ネジ研磨</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="/single/">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/illust4.jpg" alt="">
                <figcaption>特殊治具・精密ゲージ</figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="/single/">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/illust5.jpg" alt="">
                <figcaption>設計・開発</figcaption>
              </figure>
            </a>
          </li>

        </ul>
        <div class="u-ta-c">
          <a href="#" target="_blank" class="btn btn--default">製品に関する注意事項</a>
        </div>
      </div>
    </div>
  </section>-->
  <section class="sec-content index-section__news_info">
    <div class="l-container index-section__news_info_container">
      <div class="index-section__news_info_newsbox">
        <h2>
          ニュース
        </h2>
        <ul class="newslist">

          <li>
            <a href="">
              <div class="newslist-col newslist-date">2021.0.0</div>
              <div class="newslist-col newslist-title">
                <h3>ニュースタイトルニュースタイトルニュースタイトルニュースタイトルニュースタイトル</h3>
               </div>
            </a>
          </li>
          <li>
            <a href="">
              <div class="newslist-col newslist-date">2021.0.0</div>
              <div class="newslist-col newslist-title">
                <h3>ニュースタイトルニュースタイトルニュースタイトルニュースタイトル</h3>
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <div class="newslist-col newslist-date">2021.0.0</div>
              <div class="newslist-col newslist-title">
                <h3>ニュースタイトルニュースタイトル</h3>
              </div>
            </a>
          </li>
          <li>
            <a href="">
              <div class="newslist-col newslist-date">2021.0.0</div>
              <div class="newslist-col newslist-title">
                <h3>ニュースタイトル</h3>
               </div>
            </a>
          </li>

          <li>
            <a href="">
              <div class="newslist-col newslist-date">2021.0.0</div>
              <div class="newslist-col newslist-title">
                <h3>ニュースタイトル</h3>
              </div>
            </a>
          </li>

        </ul>

        <div class="btn-newslist">
          <a href="#" target="_blank">ニュース一覧</a>
        </div>
      </div>
      <div class="index-section__news_info_infobox">
        <div class="index-section__news_info_infobox_inner">

          <h2>お問い合わせ</h2>

          <img src=".<?php echo get_template_directory_uri(); ?>/images/common/contact_img.png" alt="製品情報">

          <div class="contact-info">
            <h3>有限会社 エムワン精工</h3>
            <p>本社所在地:<br>
            〒144-0056<br>
            東京都大田区西六郷3-6-6<br>
            TEL: 03-3733-1690<br>
            FAX: 03-3860-8660</p>
          </div>
        </div>

        <ul class="index-section__news_info_infobox_bnr">
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/common/iso_banner.png" alt="ISO認証 afaQ UKAS"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/common/blog_banner.png" alt="職人切磋琢磨ブログ"></a></li>
        </ul>


      </div>
    </div>
  </section>

</div>

<!-- ここまでコンテンツ -->


<?php get_footer(); ?>

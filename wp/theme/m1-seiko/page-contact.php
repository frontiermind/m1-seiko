<?php
/**
 * Template Name: contact
 */
get_header(); ?>

<!-- ここからコンテンツ -->

<div class="main-block side-contents l-page">
  <div class="mainvisual">

    <div class="l-container">
      <div class="mainvisual-inner">
      <h2>
        CONTACT
        <span>
          お問い合わせ
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
        <div class="contact_header">
          <h2><span>お問い合わせ</span></h2>
        </div>

        <div class="sec-content__inner company-info_content">

        <form action="mail.php" method="post">
          <div class="block--contents--table">
            <dl>
              <dt>お名前<span class="u-c-red">*</span></dt>
              <dd>>[mwform_text name="お名前"]</dd>
            </dl>
            <dl>
              <dt>メールアドレス<span class="u-c-red">*</span></dt>
              <dd>[mwform_text name="メールアドレス"]</dd>
            </dl>
            <dl>
              <dt>メールアドレス再入力<span class="u-c-red">*</span></dt>
              <dd>[mwform_text name="メールアドレス再入力"]</dd>
            </dl>
            <dl>
              <dt>会社名/組織名<span class="u-c-red">*</span></dt>
              <dd>[mwform_text name="会社名/組織名"]</dd>
            </dl>
            <dl>
              <dt>部署名</dt>
              <dd>[mwform_text name="#"]</dd>
            </dl>
            <dl>
              <dt>役職名</dt>
              <dd>[mwform_text name="#"]</dd>
            </dl>
            <dl>
              <dt>ホームページ</dt>
              <dd>[mwform_text name="#"]</dd>
            </dl>
            <dl>
              <dt>電話番号<span class="u-c-red">*</span></dt>
              <dd>[mwform_text name="#" placeholder="（半角入力 例:03-1234-5678 携帯可）"]</dd>
            </dl>
            <dl>
              <dt>FAX番号</dt>
              <dd>[mwform_text name="#" placeholder="（半角入力 例:03-1234-5678）"]</dd>
            </dl>
            <dl>
              <dt>郵便番号</dt>
              <dd>[mwform_text name="#" placeholder="（半角入力　例：103-0001）"]</dd>
            </dl>
            <dl>
              <dt>住所</dt>
              <dd>[mwform_text name="#" placeholder="（例:東京都中央区日本橋小伝馬町12-5）"]</dd>
            </dl>
            <dl>
              <dt>添付ファイル</dt>
              <dd>
                [mwform_file name="添付ファイル1" size="20"]
                [mwform_file name="添付ファイル2" size="20"]
                [mwform_file name="添付ファイル3" size="20"]
                <p class="attention">
                  Acceptable file types: doc,docx,xls,xlsx,ppt,pptx,pdf,txt,gif,jpg,jpeg,png,<br class="u-pc-hide">dwf,dxf,dwg,jwc,eps,zip.<br>
                  Maximum file size: 1mb.<br>
                  送信可能なファイル形式：doc,docx,xls,xlsx,ppt,pptx,pdf,txt,gif,jpg,jpeg,png,<br class="u-pc-hide">dwf,dxf,dwg,jwc,eps,zip<br>
                  最大ファイルサイズ：1mb
                  </p>
              </dd>
            </dl>
            <dl>
              <dt>件名<span class="u-c-red">*</span></dt>
              <dd>[mwform_text name="#" placeholder="件名を入力ください"]</dd>
            </dl>
            <dl>
              <dt>お問い合わせ内容<span class="u-c-red">*</span></dt>
              <dd>[mwform_textarea name="#" placeholder="お問い合わせ内容"]</dd>
            </dl>
          </div>

          <div class="u-ta-c u-mt-30 submitbtn">
            [mwform_submitButton name="submit" class="btn btn-submit js-submit"]
          </div>
        </form>

      </section>
      </div>

<?php include TEMPLATEPATH.'/common/contact.php';?>

    </main>
    <!-- / main -->

  </div>

</div>

<!-- ここまでコンテンツ -->


<?php get_footer(); ?>

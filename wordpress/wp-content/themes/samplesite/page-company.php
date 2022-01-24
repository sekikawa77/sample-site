<?php
/*
Template Name: company
*/
?>

<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _company">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">会社情報</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="/">ホーム</a>
          </li>
          <li>会社情報</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <dl class="list__desc-02">
              <div>
                <dt>商号</dt>
                <dd>株式会社 ◯◯◯◯◯◯◯◯</dd>
              </div>
  
              <div>
                <dt>代表</dt>
                <dd>代表者名◯◯ ◯◯</dd>
              </div>
  
              <div>
                <dt>事業内容</dt>
                <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテ</dd>
              </div>
  
              <div>
                <dt>設立</dt>
                <dd>0000年00月00日</dd>
              </div>
  
              <div>
                <dt>所在地</dt>
                <dd>〒000-0000 住所テキストテキストテキストテキストテキストテキストテキスト</dd>
              </div>
  
              <div>
                <dt>アクセス</dt>
                <dd>テキストテキストテキストテキストテキストテキストテキスト</dd>
              </div>
  
              <div>
                <dt>TEL</dt>
                <dd>0000-0000-0000</dd>
              </div>
  
              <div>
                <dt>FAX</dt>
                <dd>0000-0000-0000</dd>
              </div>
  
              <div>
                <dt>E-mail</dt>
                <dd><a href="mailto:sample@mail.com">sample@mail.com</a></dd>
              </div>
            </dl>
          </div>

        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
<?php
/*
Template Name: sitemap
*/
?>

<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _company">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">サイトマップ</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="/">ホーム</a>
          </li>
          <li>サイトマップ</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="sitemap">
            <ul class="sitemap__list">
              <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
              <li><a href="<?php echo home_url('/features/'); ?>">特長</a></li>
            </ul>

            <ul class="sitemap__list">
              <li><a href="<?php echo home_url('/service/'); ?>">サービス</a>
                <ul class="sitemap__list__sub">
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス1サービス1</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス2サービス2</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス3サービス3</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス4サービス4</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス5サービス5</a></li>
                </ul>
              </li>
            </ul>

            <ul class="sitemap__list">
              <li><a href="<?php echo home_url('/case/'); ?>">事例</a></li>
              <li><a href="<?php echo home_url('/event/'); ?>">セミナー／イベント</a></li>
              <li><a href="<?php echo home_url('/column/'); ?>">コラム</a></li>
              <li><a href="#">資料ダウンロード</a></li>
            </ul>

            <ul class="sitemap__list">
              <li><a href="<?php echo home_url('/company/'); ?>">会社情報</a></li>
              <li><a href="<?php echo home_url('/news/'); ?>">お知らせ</a></li>
              <li><a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー</a></li>
              <li><a href="<?php echo home_url('/sitemap/'); ?>">サイトマップ</a></li>
            </ul>

          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
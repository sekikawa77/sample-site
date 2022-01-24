<?php
/*
Template Name: service-01
*/
?>

<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _service">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">サービス</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="/">ホーム</a>
          </li>
          <li>
            <a href="/service/">サービス</a>
          </li>
          <li>サービス1サービス1</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <h2 class="hdg-lv2-01">サービス1サービス1</h2>
            <p class="hdg-lv2__lead__sub">テキストテキストテキストテキストテキスト</p>
  
            <div class="point-detail__box">
              <p class="point-detail__hdg">ポイント</p>
  
              <ul class="point-detail__list">
                <li><a href="#anc-01">テキスト1テキスト1テキスト1テキスト1テキスト1テキスト1</a></li>
                <li><a href="#anc-02">テキスト2テキスト2テキスト2テキスト2テキスト2テキスト2</a></li>
                <li><a href="#anc-03">テキスト3テキスト3テキスト3テキスト3テキスト3テキスト3</a></li>
              </ul>
            </div>
  
            <div class="point-detail__item">
              <h3 class="hdg-lv2-03" id="anc-01">テキスト1テキスト1テキスト1テキスト1テキスト1テキスト1</h3>
              <div class="point-detail__image">
                <img src="/asset/images/service/service-detail/img-service.png" alt="">
              </div>
              <div class="point-detail__text">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>

            <div class="point-detail__item">
              <h3 class="hdg-lv2-03" id="anc-02">テキスト2テキスト2テキスト2テキスト2テキスト2テキスト2</h3>
              <div class="point-detail__image">
                <img src="/asset/images/service/service-detail/img-service.png" alt="">
              </div>
              <div class="point-detail__text">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>

            <div class="point-detail__item">
              <h3 class="hdg-lv2-03" id="anc-03">テキスト3テキスト3テキスト3テキスト3テキスト3</h3>
              <div class="point-detail__image">
                <img src="/asset/images/service/service-detail/img-service.png" alt="">
              </div>
              <div class="point-detail__text">
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>

        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
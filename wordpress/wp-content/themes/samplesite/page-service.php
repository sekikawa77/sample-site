<?php
/*
Template Name: service
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
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
          </li>
          <li>サービス</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <p class="section__lead">テキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>

          <ul class="service__list col2">
            <li class="service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="service__list__item__wrap">
                  <div class="service__list__item__icon">
                    <img src="<?php echo get_template_directory_uri();?>/asset/images/service/icon-service.png" alt="">
                  </div>
                  <div class="service__list__item__content">
                    <h3 class="service__list__item__hdg">サービス1サービス1</h3>
                    <p class="service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                  </div>
                </div>
                <ul class="service__list__bullet">
                  <li>・ポイントポイントポイントポイントポイントポイントポイント</li>
                  <li>・ポイントポイントポイントポイントポイントポイントポイント</li>
                  <li>・ポイントポイントポイントポイントポイントポイントポイント</li>
                </ul>
              </a>
            </li>
            <li class="service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="service__list__item__wrap">
                  <div class="service__list__item__icon">
                    <img src="<?php echo get_template_directory_uri();?>/asset/images/service/icon-service.png" alt="">
                  </div>
                  <div class="service__list__item__content">
                    <h3 class="service__list__item__hdg">サービス2サービス2</h3>
                    <p class="service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                  </div>
                </div>
                <ul class="service__list__bullet">
                  <li>・ポイントポイントポイントポイントポイントポイントポイント</li>
                  <li>・ポイントポイントポイントポイントポイントポイントポイント</li>
                  <li>・ポイントポイントポイントポイントポイントポイントポイント</li>
                </ul>
              </a>
            </li>
          </ul>
 
          <p class="section__lead__sub">テキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>

          <ul class="service__list col3">
            <li class="service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="service__list__item__wrap">
                  <div class="service__list__item__icon">
                    <img src="<?php echo get_template_directory_uri();?>/asset/images/service/icon-service.png" alt="">
                  </div>
                  <div class="service__list__item__content">
                    <h3 class="service__list__item__hdg">サービス3サービス3</h3>
                    <p class="service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                  </div>
                </div>
              </a>
            </li>

            <li class="service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="service__list__item__wrap">
                  <div class="service__list__item__icon">
                    <img src="<?php echo get_template_directory_uri();?>/asset/images/service/icon-service.png" alt="">
                  </div>
                  <div class="service__list__item__content">
                    <h3 class="service__list__item__hdg">サービス4サービス4</h3>
                    <p class="service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                  </div>
                </div>
              </a>
            </li>

            <li class="service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="service__list__item__wrap">
                  <div class="service__list__item__icon">
                    <img src="<?php echo get_template_directory_uri();?>/asset/images/service/icon-service.png" alt="">
                  </div>
                  <div class="service__list__item__content">
                    <h3 class="service__list__item__hdg">サービス5サービス5</h3>
                    <p class="service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>

        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
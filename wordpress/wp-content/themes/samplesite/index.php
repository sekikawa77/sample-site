<?php get_header(); ?>

    <main class="main">
      <section class="top__mv">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">メインビジュアルメインビジュアル</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>

        </div>
      </section>
      
      <section class="section">
        <div class="inner">
          <h2 class="hdg-lv2-01">特徴</h2>
          <p class="hdg-lv2__lead">テキストテキストテキストテキストテキスト</p>

          <ul class="top__features__list">
            <li class="top__features__list__item">
                <div class="top__features__list__item__image">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/img-features-01.png" alt="">
                </div>
                <p class="top__features__list__item__text">テキストテキストテキストテキストテキスト</p>
            </li>
            <li class="top__features__list__item">
              <div class="top__features__list__item__image">
                <img src="<?php echo get_template_directory_uri();?>/asset/images/top/img-features-02.png" alt="">
              </div>
              <p class="top__features__list__item__text">テキストテキストテキストテキストテキスト</p>
            </li>
            <li class="top__features__list__item">
              <div class="top__features__list__item__image">
                <img src="<?php echo get_template_directory_uri();?>/asset/images/top/img-features-03.png" alt="">
              </div>
              <p class="top__features__list__item__text">テキストテキストテキストテキストテキスト</p>
            </li>
          </ul>
          
          <p class="top__section__btn btn-02">
            <a href="<?php echo home_url('/features/'); ?>"><span>詳しく見る</span></a>
          </p>
        </div>
      </section>

      <section class="section bg-01">
        <div class="inner">
          <h2 class="hdg-lv2-01">サービス</h2>
          <p class="hdg-lv2__lead">テキストテキストテキストテキストテキスト</p>

          <ul class="top__service__list col2">
            <li class="top__service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="top__service__list__item__icon">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/icon-service.png" alt="">
                </div>
                <div class="top__service__list__item__content">
                  <h3 class="top__service__list__item__hdg">サービス1サービス1</h3>
                  <p class="top__service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキテキストテキストテキス…</p>
                </div>
              </a>

            </li>
            <li class="top__service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="top__service__list__item__icon">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/icon-service.png" alt="">
                </div>
                <div class="top__service__list__item__content">
                  <h3 class="top__service__list__item__hdg">サービス2サービス2</h3>
                  <p class="top__service__list__item__text">テキストテキストテキストテキストテキストテキストテキストテキテキストテキストテキス…</p>
                </div>
              </a>

            </li>
          </ul>

          <ul class="top__service__list col3">
            <li class="top__service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="top__service__list__item__icon">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/icon-service.png" alt="">
                </div>
                <div class="top__service__list__item__content">
                  <h3 class="top__service__list__item__hdg">サービス3サービス3</h3>
                  <p class="top__service__list__item__text">テキストテキストテキストテキストテキス…</p>
                </div>
              </a>

            </li>
            <li class="top__service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="top__service__list__item__icon">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/icon-service.png" alt="">
                </div>
                <div class="top__service__list__item__content">
                  <h3 class="top__service__list__item__hdg">サービス4サービス4</h3>
                  <p class="top__service__list__item__text">テキストテキストテキストテキストテキス…</p>
                </div>
              </a>

            </li>
            <li class="top__service__list__item">
              <a href="<?php echo home_url('/service/service-01/'); ?>">
                <div class="top__service__list__item__icon">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/icon-service.png" alt="">
                </div>
                <div class="top__service__list__item__content">
                  <h3 class="top__service__list__item__hdg">サービス5サービス5</h3>
                  <p class="top__service__list__item__text">テキストテキストテキストテキストテキス…</p>
                </div>
              </a>

            </li>
          </ul>

          <p class="top__section__btn btn-01">
            <a href="<?php echo home_url('/service/'); ?>"><span>詳しく見る</span></a>
          </p>
        </div>
      </section>

      <section class="section">
        <div class="inner">
          <h2 class="hdg-lv2-01">事例</h2>
          <p class="hdg-lv2__lead">テキストテキストテキストテキストテキスト</p>

          <ul class="list__card-01">
          <?php
            $args = array(
              'post_type' => 'case',
              'posts_per_page' => 3
            );

            $the_query = new WP_Query($args);
          ?>
          <?php if($the_query -> have_posts()):
            while($the_query -> have_posts()) : $the_query -> the_post();
          ?>
            <li class="list__card-01__item">
              <a href="<?php the_permalink(); ?>">
                <div class="list__card-01__image">
                  <img src="<?php the_field('company_image'); ?>" alt="">
  
                  <span class="list__card-01__logo">
                    <img src="<?php the_field('conpany_logo'); ?>" alt="">
                  </span>
                </div>
                <div class="list__card-01__content">
                  <h3 class="list__card-01__hdg"><?php the_title(); ?></h3>
                  <p class="list__card-01__name"><?php the_field('company_name'); ?></p>
  
                  <dl class="list__desc-01">
                    <div>
                      <dt>業種</dt>
                      <dd><?php the_field('industry'); ?></dd>
                    </div>
                    <div>
                      <dt>従業員数</dt>
                      <dd><?php the_field('employee'); ?></dd>
                    </div>
                    <div>
                      <dt>課題</dt>
                      <dd><?php the_field('theme'); ?></dd>
                    </div>
                  </dl>
                </div>
              </a>
            </li>
            <?php
                endwhile;
              endif;
              wp_reset_postdata();
            ?>

          </ul>

          <p class="top__section__btn btn-01">
            <a href="<?php echo home_url('/case/'); ?>"><span>詳しく見る</span></a>
          </p>

        </div>
      </section>

      <section class="section bg-01">
        <div class="inner">
          <h2 class="hdg-lv2-01">セミナー／イベント</h2>
          <p class="hdg-lv2__lead">テキストテキストテキストテキストテキスト</p>

          <ul class="list__card-01">
          <?php
            $args = array(
              'numberposts' => 2,
              'post_type' => 'event',
              'order' => 'ASC',
              'meta_key' => 'event_deadline',
              'orderby' => 'meta_value',
              'meta_value' => date('Ymd'),
              'meta_compare' => '>=',
            );

            $posts = get_posts( $args );

            if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );

          ?>

            <li class="list__card-01__item">
              <div class="list__card-01__image">
                <img src="<?php the_field('event_image'); ?>" alt="">

                <span class="list__card-01__flag">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/img-event-flag-01.png" alt="">
                </span>
              </div>
              <div class="list__card-01__content">
                <p class="list__card-01__date"><?php the_field('event_date'); ?></p>
                <h3 class="list__card-01__hdg"><?php the_title(); ?></h3>

                <dl class="list__desc-01">
                  <div>
                    <dt>場所</dt>
                    <dd><?php the_field('event_venue'); ?></dd>
                  </div>
                  <div>
                    <dt>テーマ</dt>
                    <dd><?php the_field('event_theme'); ?></dd>
                  </div>
                  <div>
                    <dt>対象者</dt>
                    <dd><?php the_field('event_person'); ?></dd>
                  </div>
                </dl>

                <p class="list__card-01__btn btn-05">
                    <a href="<?php the_permalink(); ?>"><span>お申込み</span></a>
                </p>
              </div>
            </li>
            <?php endforeach; ?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>

            <?php
              $args = array(
                'numberposts' => 1,
                'post_type' => 'event',
                'order' => 'ASC',
                'meta_key' => 'event_deadline',
                'orderby' => 'meta_value',
                'meta_value' => date('Ymd'),
                'meta_compare' => '<=',
              );

              $posts = get_posts( $args );

              if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );

            ?>
            <?php endforeach; ?>
            <li class="list__card-01__item is-finished">
              <div class="list__card-01__image">
                <img src="<?php the_field('event_image'); ?>" alt="">

                <span class="list__card-01__flag">
                  <img src="<?php echo get_template_directory_uri();?>/asset/images/top/img-event-flag-02.png" alt="">
                </span>
              </div>
              <div class="list__card-01__content">
                <p class="list__card-01__date"><?php the_field('event_date'); ?></p>
                <h3 class="list__card-01__hdg"><?php the_title(); ?></h3>

                <dl class="list__desc-01">
                  <div>
                    <dt>場所</dt>
                    <dd><?php the_field('event_venue'); ?></dd>
                  </div>
                  <div>
                    <dt>テーマ</dt>
                    <dd><?php the_field('event_theme'); ?></dd>
                  </div>
                  <div>
                    <dt>対象者</dt>
                    <dd><?php the_field('event_person'); ?></dd>
                  </div>
                </dl>
              </div>
            </li>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
          </ul>

          <p class="top__section__btn btn-01">
            <a href="<?php echo home_url('/event/'); ?>"><span>すべて見る</span></a>
          </p>
        </div>
      </section>

      <section class="section">
        <div class="inner">
          <h2 class="hdg-lv2-01">お知らせ</h2>
          <p class="hdg-lv2__lead">テキストテキストテキストテキストテキスト</p>

          <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 5,
            );

            $the_query = new WP_Query($args);
          ?>

          <ul class="list__news">
            <?php if($the_query -> have_posts()):
              while($the_query -> have_posts()) : $the_query -> the_post();
            ?>
            <li class="list__news__item">
              <a href="<?php the_permalink(); ?>">
                <div class="list__news__item__meta">
                  <p class="list__news__item__date"><?php echo get_the_date(); ?></p>
                  <p class="list__news__item__cate">
                    <?php
                      $term = get_the_terms($post->ID,'news_cate');
                      echo $term[0]->name;
                    ?>
                  </p>
                </div>
                <p class="list__news__item__hdg"><?php the_title(); ?></p>
              </a>
            </li>

            <?php
                endwhile;
              endif;
              wp_reset_postdata();
            ?>
          </ul>

          <p class="top__section__btn btn-01">
            <a href="<?php echo home_url('/news/'); ?>"><span>すべて見る</span></a>
          </p>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
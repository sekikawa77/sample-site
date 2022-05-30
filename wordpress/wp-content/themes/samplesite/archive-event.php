<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _event">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">セミナー／イベント</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
          </li>
          <li>セミナー／イベント</li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <p class="section__lead">テキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキスト</p>
          <ul class="list__card-01">

          <?php
            $args = array(
              'numberposts' => -1,
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
                'numberposts' => -1,
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
            <?php endforeach; ?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
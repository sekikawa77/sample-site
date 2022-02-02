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
          <li>
            <a href="<?php echo home_url('/event/'); ?>">セミナー／イベント</a>
          </li>
          <li><?php the_title(); ?></li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <div class="detail__header">
              <p class="detail__header__date"><span class="status">受付中</span><?php the_field('event_date'); ?></p>
              <h2 class="detail__header__hdg"><?php the_title(); ?></h2>
              <?php if(get_field('event_text')): ?>
              <p class="detail__header__text"><?php the_field('event_text'); ?></p>
              <?php endif; ?>
            </div>

            <div class="event__item">
              <h3 class="hdg-lv3-02">▼スケジュール</h3>

              <dl class="list__desc-03">
                <?php if(get_field('event_date')): ?>
                <div>
                  <dt>日時</dt>
                  <dd><?php the_field('event_date'); ?></dd>
                </div>
                <?php endif; ?>
                <?php if(get_field('event_theme')): ?>
                <div>
                  <dt>テーマ</dt>
                  <dd><?php the_field('event_theme'); ?></dd>
                </div>
                <?php endif; ?>
                <?php if(get_field('event_person')): ?>
                <div>
                  <dt>対象者</dt>
                  <dd><?php the_field('event_person'); ?></dd>
                </div>
                <?php endif; ?>
                <?php if(get_field('event_deadline')): ?>
                <div>
                  <dt>申込締切</dt>
                  <dd><?php the_field('event_deadline'); ?></dd>
                </div>
                <?php endif; ?>
                <?php if(get_field('event_venue')): ?>
                <div>
                  <dt>会場</dt>
                  <dd><?php the_field('event_venue'); ?></dd>
                </div>
                <?php endif; ?>
                <?php if(get_field('event_price')): ?>
                <div>
                  <dt>費用</dt>
                  <dd><?php the_field('event_price'); ?></dd>
                </div>
                <?php endif; ?>
                <?php if(get_field('event_capacity')): ?>
                <div>
                  <dt>定員</dt>
                  <dd><?php the_field('event_capacity'); ?></dd>
                </div>
                <?php endif; ?>
              </dl>
            </div>

            <div class="event__item">
              <h3 class="hdg-lv3-02">▼内容</h3>

              <?php if(get_field('event_contents')): ?>
              <div class="event__item__text">
                <?php the_field('event_contents'); ?>
              </div>
              <?php endif; ?>
            </div>

            <p class="btn-05 event__btn">
              <a href="<?php the_field('event_btn'); ?>" target="_blank"><span>お申込み</span></a>
            </p>
          </div>
        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>
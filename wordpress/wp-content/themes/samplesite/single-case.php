<?php get_header(); ?>

    <main class="main">
      <section class="pagetitle _case">
        <div class="inner">
          <div class="pagetitle__text">
            <h1 class="hdg-lv1-01">事例</h1>
            <p class="hdg-lv1__lead">テキストテキストテキストテキストテキスト</p>
          </div>
        </div>

        <ul class="breadcrumb">
          <li>
            <a href="<?php echo home_url('/'); ?>">ホーム</a>
          </li>
          <li>
            <a href="<?php echo home_url('/case/'); ?>">事例</a>
          </li>
          <li><?php the_title(); ?></li>
        </ul>
      </section>
      
      <section class="section">
        <div class="inner">
          <div class="content">
            <h2 class="hdg-lv2-01 _align-left"><?php the_title(); ?></h2>

            <div class="case-detail__header">
              <h3 class="case-detail__header__hdg"><?php the_field('company_name'); ?></h3>
              <?php if(get_field('text')): ?>
              <p class="case-detail__header__text"><?php the_field('text'); ?></p>
              <?php endif; ?>
            </div>
  
            <?php if(get_field('theme')): ?>
            <div class="case-detail__item">
              <h3 class="hdg-lv3-01">
                <span class="sub">課題</span>
                <span class="main"><?php the_field('theme'); ?></span>
              </h3>
  
              <div class="case-detail__image">
                <img src="<?php the_field('theme_image'); ?>" alt="">
              </div>

              <div class="case-detail__text">
                <?php the_field('theme_text'); ?>
              </div>
            </div>
            <?php endif; ?>

            <?php if(get_field('reason')): ?>
            <div class="case-detail__item">
              <h3 class="hdg-lv3-01">
                <span class="sub">理由</span>
                <span class="main"><?php the_field('reason'); ?></span>
              </h3>
  
              <div class="case-detail__image">
                <img src="<?php the_field('reason_image'); ?>" alt="">
              </div>

              <div class="case-detail__text">
                <?php the_field('reason_text'); ?>
              </div>
            </div>
            <?php endif; ?>

            <?php if(get_field('effects')): ?>
            <div class="case-detail__item">
              <h3 class="hdg-lv3-01">
                <span class="sub">成果・効果</span>
                <span class="main"><?php the_field('effects'); ?></span>
              </h3>
  
              <div class="case-detail__image">
                <img src="<?php the_field('effects_image'); ?>" alt="">
              </div>

              <div class="case-detail__text">
                <?php the_field('effects_text'); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>

          
        </div>
      </section>

      <section class="section bg-01">
        <div class="inner">
          <div class="content">
            <h3 class="case-detail__company__hdg">▼企業情報</h3>

            <div class="case-detail__company">
              <dl class="case-detail__company__desc">
                <div>
                  <dt>会社名</dt>
                  <dd><?php the_field('company_name'); ?></dd>
                </div>
                <div>
                  <dt>設立</dt>
                  <dd><?php the_field('established'); ?></dd>
                </div>
                <div>
                  <dt>代表者</dt>
                  <dd><?php the_field('representative'); ?></dd>
                </div>
                <div>
                  <dt>本社所在地</dt>
                  <dd><?php the_field('address'); ?></dd>
                </div>
                <div>
                  <dt>事業概要</dt>
                  <dd><?php the_field('summary'); ?></dd>
                </div>
                <div>
                  <dt>URL</dt>
                  <dd><a href="<?php the_field('url'); ?>" target="_blank"><?php the_field('url'); ?></a></dd>
                </div>
              </dl>
  
              <div class="case-detail__company__image">
                <img src="<?php the_field('company_image'); ?>" alt="">
              </div>
            </div>
          </div>

        </div>
      </section>

      <?php get_template_part('template-parts/contact'); ?>
    </main>

<?php get_footer(); ?>